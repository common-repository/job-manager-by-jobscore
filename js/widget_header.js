jQuery.noConflict();

var jobscore_valid_account = false;

if (typeof(window.$js) == "undefined") {
  (function(window) {
    var _oldjs = window.$js;
    window._jobscore = {};
    var jobscore = window._jobscore;
    jobscore.fn = {};
    window.$js = jobscore;

    // register methods - can just add them to $js.fn as well
    jobscore.register = function(name, func) {
      jobscore.fn[name] = func;
    }
  })(window);
}

// make underscore's templates look like mustache/handlebars so we don't have erb conflicts
// {{ statement }} is a control statement
// {{= statement }} auto html escapes output (including quotes(??) beware)
// {{raw stateent }} outputs non-escaped results
jQuery(function() {
  _.templateSettings = {
    evaluate    : /\{\{([\s\S]+?)\}\}/gim,
    interpolate : /\{\{raw([\s\S]+?)\}\}/gim,
    escape      : /\{\{\=([\s\S]+?)\}\}/gim
  };
});

String.prototype.bool = function() {
    return (/^true$/i).test(this);
};

// patch up String to do the right thing
String.prototype.capitalize = function() {
  return this.replace(/\w\S*/g, function(txt) { return txt.charAt(0).toUpperCase() + txt.slice(1).toLowerCase(); });
}

String.prototype.dasherize = function() {
  return this.replace(/[\W_]/g, '-');
}

String.prototype.underscoreize = function() {
  return this.replace(/[\W]/g, '_');
}

String.prototype.spacerize = function() {
  return this.replace(/[\W_\-]/g, ' ');
}

String.prototype.domidize = function() {
  return "param-" + this.dasherize();
}

String.prototype.destidize = function() {
  return "param-" + this.dasherize();
}

String.prototype.srcidize = function() {
  return "proxy-" + this.dasherize();
}

String.prototype.parameterize = function() {
  return this.replace(/param[\-]/, '') + this.underscoreize();
}

String.prototype.reversize = function() {
  if (this.indexOf('_reverse') != -1) {
    return this.replace(/_reverse/, '');
  } else {
    return this + "_reverse";
  }
}

function blank(s) {
  if (s === null)
  return true;
  if (s === "")
  return true;
  if (s instanceof String) {
    var n = s.replace(/\s/g, "");
    if (n === "") {
      return true;
    }
  }
  return false;
}

function invert_color(color) {
   return (color.replace('#','0x')) > (0xffffff/2) ? 'black' : 'white'
}

jQuery(function() {
  jQuery("form").submit(function() {

    jQuery('#ajax-message').slideUp('fast');
    jQuery('.ajax-feedback').css('visibility', 'visible');

    var opts = $js.fn.getOptions();
    var account_name = get_account_code(false);
    var page_id = jQuery('#page-id').val();

    jQuery.post(
       ajaxurl,
       {
        'action':'admin_config',
        'account_name': account_name,
        'page_id': page_id,
        'widget_options': opts
       }, function(response)
       {
         var json = jQuery.parseJSON(response);
         if(json.success == 1) {
           jQuery('.ajax-feedback').css('visibility', 'hidden');
           jQuery('#ajax-message').slideDown('fast');

           if (jQuery('#permalink_preview').html() == null) {
             jQuery('.ajax-feedback').before('<a id="permalink_preview" target="_blank" href="'+json.permalink+'">Click here to preview your jobs page</a>')
           }
         }
     });

    return false;
  });

  jQuery('#ajax-message .notice-dismiss').on('click', function() {
    jQuery('#ajax-message').slideUp('fast');
    return false;
  });

});

function init_farbtastic_elements() {
  jQuery.each(WIDGET_PARAMS, function(option, params) {
    var picker  = '#' + option.srcidize() + '-picker';
    var text  = '#' + option.srcidize();

    if (params.type == "color" && jQuery(picker).length > 0) {
      jQuery(picker).farbtastic(text);
      jQuery(text).focus(function() {
        jQuery(picker).fadeIn();
      });

      jQuery(text).blur(function() {
        jQuery(picker).hide();
      });
    }
  });
}

/*
 * @param [String] careers_site_url An URL. Supported formats:
 * "https://www.jobscore.com/jobs/jobscore",
 * "https://www.jobscore.com/jobs/jobscore/list",
 * "jobscore.com/jobs/jobscore?a=a"
 * @return [String] account code extracted from the URL
 */
function find_account_code(careers_site_url) {
  // Tries to match with the most usual URL version
  var matches = careers_site_url.match(new RegExp("\/jobs?\/([^\/?]+)"));
  return matches != undefined ? matches[1] : careers_site_url;
}

function get_account_code(show_sample_jobs_account) {
  var js_account_code  = find_account_code(jQuery('#jobscore-account-name').val());

  show_sample_jobs_account = typeof show_sample_jobs_account == 'undefined' ? true : show_sample_jobs_account;
  return jobscore_valid_account && js_account_code ? js_account_code : (show_sample_jobs_account ? 'jobscore' : '');
}
