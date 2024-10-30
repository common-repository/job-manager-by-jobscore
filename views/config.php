<script type="text/javascript">
  var WIDGET_PARAMS = {
    text_color:         {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'text_color')) ?>', 'default':'#333333'},
    bg_color:           {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'bg_color')) ?>', 'default':"transparent"},
    font_family:        {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'font_family')) ?>', 'default':"Arial, Helvetica, sans-serif"},
    font_size:          {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'font_size')) ?>', 'default':"12px"},
    line_height:        {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'line_height')) ?>', 'default':"15px"},
    link_text_color:    {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'link_text_color')) ?>', 'default':"#3333FF"},
    link_bg_color:      {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'link_bg_color')) ?>', 'default':"transparent"},
    link_font_weight:   {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'link_font_weight')) ?>', 'default':"normal"},
    link_font_size:     {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'link_font_size')) ?>','default':"12px"},
    header_text_color:  {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'header_text_color')) ?>', 'default':"#333333"},
    header_bg_color:    {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'header_bg_color')) ?>', 'default':"#F0F0F0"},
    header_font_size:   {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'header_font_size')) ?>','default':"0.9em"},
    header_line_height: {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'header_line_height')) ?>', 'default':"1.0em"},
    zebra_stripe:       {'type':'checkbox', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'zebra_stripe')) ?>', 'default':false},
    odd_row_bg_color:   {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'odd_row_bg_color')) ?>', 'default':"transparent"},
    even_row_bg_color:  {'type':'color', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'even_row_bg_color')) ?>', 'default':"#F9F9FF"},
    row_border_bottom:  {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'row_border_bottom')) ?>', 'default':"none"},
    row_border_top:     {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'row_border_top')) ?>', 'default':"none"},

    source_subname:     {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'source_subname')) ?>', 'default':null},

    css_url:            {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'css_url')) ?>', 'default':null},
    width:              {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'width')) ?>', 'default':"auto"},

    display_fields:     {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'display_fields')) ?>', 'default':'title,department,location'},
    sort_by:            {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'sort_by')) ?>', 'default':'department,title'},

    filter_fields:      {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'filter_fields')) ?>', 'default':'department,location'},
    filters:            {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'filters')) ?>', 'default':null},
    group_by:           {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'group_by')) ?>', 'default':null},

    list_type:          {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'list_type')) ?>', 'default':"auto"}, // "multicolumn, grouped, single, auto"

    show_searchbar_count: {'type':'text',  'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'show_searchbar_count')) ?>', 'default':10},
    show_social_sharing: {'type':'text', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'show_social_sharing')) ?>', 'default':'none'},
    show_talent_network: {'type':'checkbox', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'show_talent_network')) ?>', 'default':true},
    show_header:        {'type':'checkbox', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'show_header')) ?>', 'default':true},
    sample_jobs_count:  {'type':'text', 'value': '<?php echo (int) esc_attr(get_option(WPJS_OPT_WIDGET . 'sample_jobs_count')) ?>', 'default':  null},

    feed_url:           {'type':'text', 'value': '<?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'feed_url')) ?>', 'default':null}
  };
</script>
<script type='text/javascript' src='<?php echo WPJS_URL . '/js/widget_header.js' ?>'></script>

<div class="wrap jobscore-manager">
  <form action="" method="post">
    <h1><?php _e('JobScore - Job Manager'); ?></h1>

    <div id="ajax-message" class="updated notice notice-success">
      <p>Settings saved successfully</p>
      <button type="button" class="notice-dismiss">
        <span class="screen-reader-text">Dismiss this notice.</span>
      </button>
    </div>

    <div class="top-controls">
      <?php if ($permalink != '') { ?>
        <a id="permalink_preview" target="_blank" href="<?php echo $permalink; ?>">Click here to preview your jobs page</a>
      <?php } ?>

      <img src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" class="ajax-feedback" title="" alt="" />

      <button type="submit" class='button-primary'>Save configuration</button>
    </div>

    <table class='layout'>
      <tr>
        <td id='options-pane' valign='top' class="metabox-holder">

          <div class='postbox-container'>

            <div class='postbox'>
              <h3 class="hndle">Basic Controls</h3>
              <div class='inside'>
                <div id="must-have-jobscore-account" class="hide update-nag">
                  You must have a JobScore Account to use this plugin. <br />
                  <a target="_blank"  href="//www.jobscore.com/signup?utm_source=wordpress-plugin">Get your Free Account.</a>
                </div>

                <table class='options'>
                  <tr>
                    <td>
                      <label for="jobscore-account-name">JobScore Careers Site:</label>
                    </td>
                    <td>
                      https://jobscore.com/careers/
                      <input value="<?php echo $account_name ?>" id='jobscore-account-name' placeholder="Your account name" style="width: 140px"><br>
                      <em>
                        <a href="https://hire.jobscore.com/employer/admin/edit_account/" target="_blank">Get your Careers Site URL</a>
                      </em>
                      <span class="form-error">*Invalid URL</span>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <label for="jobscore-account-name">Display jobs on this page:</label>
                    </td>
                    <td>
                      <?php echo $page_list ?> <br />
                      <em>Jobs will be shown at the bottom of the page.</em>
                    </td>
                  </tr>

                  <tr>
                    <td>Layout type:</td>
                    <td>
                      <select id='list-type'>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'list_type')) == 'auto' ? 'selected' : '' ?> value='auto'>Auto</option>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'list_type')) == 'single' ? 'selected' : '' ?> value='single'>Single Column</option>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'list_type')) == 'multi' ? 'selected' : '' ?> value='multi'>Multi Column</option>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'list_type')) == 'grouped' || !esc_attr(get_option(WPJS_OPT_WIDGET . 'list_type')) ? 'selected' : '' ?> value='grouped'>Grouped</option>
                      </select>
                    </td>
                  </tr>

                  <tr id='zebra-stripe-row'>
                    <td>Zebra stripe:</td>
                    <td>
                      <input type='checkbox' <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'zebra_stripe')) == 'true' ? 'checked="checked"' : "" ?> name="zebra_stripe" id='proxy-zebra-stripe'></input><label class='checkbox' for='proxy-zebra-stripe'>Alternating Row colors</label>
                    </td>
                  </tr>

                  <tr id='group-by-row' style='display:none;'>
                    <td>Group by:</td>
                    <td>
                      <select id='group-by'>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'group_by')) == 'none' ? 'selected="selected"' : "" ?> value='none'>None</option>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'group_by')) == 'department' ? 'selected="selected"' : "" ?> value='department'>Department</option>
                        <option <?php echo esc_attr(get_option(WPJS_OPT_WIDGET . 'group_by')) == 'location' ? 'selected="selected"' : "" ?> value='location'>Location</option>
                      </select>
                    </td>
                  </tr>

                  <tr id='select-columns-row'>
                    <td>Show columns:</td>
                    <?php
                      $display_fields = esc_attr(get_option(WPJS_OPT_WIDGET . 'display_fields'));
                    ?>
                    <td>
                      <input <?php echo preg_match("/department/i", $display_fields) || !$display_fields ? "checked" : "" ?> type='checkbox'  id='column-department'></input><label class='checkbox' for='column-department'>Department</label>
                      <input <?php echo preg_match("/location/i", $display_fields) || !$display_fields ? "checked" : "" ?> type='checkbox'  id='column-location'></input><label class='checkbox' for='column-location'>Location</label>
                    </td>
                  </tr>

                  <tr id='sort-columns-row'>
                    <td valign='top'>Sort jobs by:</td>
                    <?php
                      $sort_by_1 = $sort_by_2 = $sort_by_3 = '';

                      $sort_by_option = esc_attr(get_option(WPJS_OPT_WIDGET . 'sort_by'));

                      $sort_by_option_array = explode(",", $sort_by_option);

                      if (isset($sort_by_option_array[0])) {
                        $sort_by_1 = $sort_by_option_array[0];
                      }

                      if (isset($sort_by_option_array[1])) {
                        $sort_by_2 = $sort_by_option_array[1];
                      }

                      if (isset($sort_by_option_array[2])) {
                        $sort_by_3 = $sort_by_option_array[2];
                      }
                    ?>

                    <td id='sort-by'>
                      <select id='sort-by-1'>
                        <option value='none'>---</option>
                        <option <?php echo $sort_by_1 == 'department' || !$sort_by_1 ? 'selected' : '' ?> value='department'>Department</option>
                        <option <?php echo $sort_by_1 == 'department_reverse' ? 'selected' : '' ?> value='department_reverse'>Reverse Department</option>
                        <option <?php echo $sort_by_1 == 'location' ? 'selected' : '' ?> value='location'>Location</option>
                        <option <?php echo $sort_by_1 == 'location_reverse' ? 'selected' : '' ?> value='location_reverse'>Reverse Location</option>
                        <option <?php echo $sort_by_1 == 'title' ? 'selected' : '' ?> value='title'>Title</option>
                        <option <?php echo $sort_by_1 == 'title_reverse' ? 'selected' : '' ?> value='title_reverse'>Reverse Title</option>
                        <option <?php echo $sort_by_1 == 'country' ? 'selected' : '' ?> value='country'>Country</option>
                        <option <?php echo $sort_by_1 == 'country_reverse' ? 'selected' : '' ?> value='country_reverse'>Reverse Country</option>
                        <option <?php echo $sort_by_1 == 'city' ? 'selected' : '' ?> value='city'>City</option>
                        <option <?php echo $sort_by_1 == 'city_reverse' ? 'selected' : '' ?> value='city_reverse'>Reverse City</option>
                        <option <?php echo $sort_by_1 == 'state' ? 'selected' : '' ?> value='state'>State</option>
                        <option <?php echo $sort_by_1 == 'state_reverse' ? 'selected' : '' ?> value='state_reverse'>Reverse State</option>
                        <option <?php echo $sort_by_1 == 'opened_date' ? 'selected' : '' ?> value='opened_date'>Date Posted</option>
                        <option <?php echo $sort_by_1 == 'opened_date_reverse' ? 'selected' : '' ?> value='opened_date_reverse'>Reverse Date</option>
                      </select> <span>then by</span>
                      <br>
                      <select id='sort-by-2'>
                        <option value='none'>---</option>
                        <option <?php echo $sort_by_2 == 'department' || !$sort_by_2 ? 'selected' : '' ?> value='department'>Department</option>
                        <option <?php echo $sort_by_2 == 'department_reverse' ? 'selected' : '' ?> value='department_reverse'>Reverse Department</option>
                        <option <?php echo $sort_by_2 == 'location' ? 'selected' : '' ?> value='location'>Location</option>
                        <option <?php echo $sort_by_2 == 'location_reverse' ? 'selected' : '' ?> value='location_reverse'>Reverse Location</option>
                        <option <?php echo $sort_by_2 == 'title' || !$sort_by_2 ? 'selected' : '' ?> value='title'>Title</option>
                        <option <?php echo $sort_by_2 == 'title_reverse' ? 'selected' : '' ?> value='title_reverse'>Reverse Title</option>
                        <option <?php echo $sort_by_2 == 'country' ? 'selected' : '' ?> value='country'>Country</option>
                        <option <?php echo $sort_by_2 == 'country_reverse' ? 'selected' : '' ?> value='country_reverse'>Reverse Country</option>
                        <option <?php echo $sort_by_2 == 'city' ? 'selected' : '' ?> value='city'>City</option>
                        <option <?php echo $sort_by_2 == 'city_reverse' ? 'selected' : '' ?> value='city_reverse'>Reverse City</option>
                        <option <?php echo $sort_by_2 == 'state' ? 'selected' : '' ?> value='state'>State</option>
                        <option <?php echo $sort_by_2 == 'state_reverse' ? 'selected' : '' ?> value='state_reverse'>Reverse State</option>
                        <option <?php echo $sort_by_2 == 'opened_date' ? 'selected' : '' ?> value='opened_date'>Date Posted</option>
                        <option <?php echo $sort_by_2 == 'opened_date_reverse' ? 'selected' : '' ?> value='opened_date_reverse'>Reverse Date</option>

                      </select>
                      <span>then by</span>
                      <br>
                      <select id='sort-by-3'>
                        <option value='none'>---</option>
                        <option <?php echo $sort_by_3 == 'department' ? 'selected' : '' ?> value='department'>Department</option>
                        <option <?php echo $sort_by_3 == 'department_reverse' ? 'selected' : '' ?> value='department_reverse'>Reverse Department</option>
                        <option <?php echo $sort_by_3 == 'location' ? 'selected' : '' ?> value='location'>Location</option>
                        <option <?php echo $sort_by_3 == 'location_reverse' ? 'selected' : '' ?> value='location_reverse'>Reverse Location</option>
                        <option <?php echo $sort_by_3 == 'title'  ? 'selected' : '' ?> value='title'>Title</option>
                        <option <?php echo $sort_by_3 == 'title_reverse' ? 'selected' : '' ?> value='title_reverse'>Reverse Title</option>
                        <option <?php echo $sort_by_3 == 'country' ? 'selected' : '' ?> value='country'>Country</option>
                        <option <?php echo $sort_by_3 == 'country_reverse' ? 'selected' : '' ?> value='country_reverse'>Reverse Country</option>
                        <option <?php echo $sort_by_3 == 'city' ? 'selected' : '' ?> value='city'>City</option>
                        <option <?php echo $sort_by_3 == 'city_reverse' ? 'selected' : '' ?> value='city_reverse'>Reverse City</option>
                        <option <?php echo $sort_by_3 == 'state' ? 'selected' : '' ?> value='state'>State</option>
                        <option <?php echo $sort_by_3 == 'state_reverse' ? 'selected' : '' ?> value='state_reverse'>Reverse State</option>
                        <option <?php echo $sort_by_3 == 'opened_date' ? 'selected' : '' ?> value='opened_date'>Date Posted</option>
                        <option <?php echo $sort_by_3 == 'opened_date_reverse' ? 'selected' : '' ?> value='opened_date_reverse'>Reverse Date</option>

                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td colspan='2' class="break-line"><hr/></td>
                  </tr>

                  <tr>
                    <td>Preview with:</td>

                    <?php
                      $sample_jobs_count = esc_attr(get_option(WPJS_OPT_WIDGET . 'sample_jobs_count'));
                    ?>

                    <td>
                      <select id='proxy-sample-jobs-count'>
                        <option <?php echo $sample_jobs_count === '0' || !$sample_jobs_count ? 'selected' : '' ?> value='0'>Open Jobs</option>
                        <option <?php echo $sample_jobs_count == '5' ? 'selected="selected"' : '' ?> value='5'>5 Sample Jobs</option>
                        <option <?php echo $sample_jobs_count == '10' ? 'selected' : '' ?> value='10'>10 Sample Jobs</option>
                        <option <?php echo $sample_jobs_count == '20' ? 'selected' : '' ?> value='20'>20 Sample Jobs</option>
                        <option <?php echo $sample_jobs_count == '40' ? 'selected' : '' ?> value='40'>40 Sample Jobs</option>
                        <option <?php echo $sample_jobs_count == '100' ? 'selected' : '' ?> value='100'>100 Sample Jobs</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class='postbox'>
              <h3 class="hndle">CSS URL Control</h3>
              <div class='inside'>
                <table class='options'>
                  <tr>
                    <td>CSS from your own website:</td>
                    <td>
                      <input type='text' id='proxy-css-url'></input><br>
                      <em>The URL where the custom CSS of your website is located. If you enter a URL here your CSS will overwrite any of the values selected in custom controls below.</em>
                    </td>
                  </tr>
                </table>
              </div>
            </div>

            <div class='postbox'>
              <h3 class="hndle">Custom Controls</h3>
              <div class='inside'>
                <table class='options'>
                  <tr>
                    <td>Text color:</td>
                    <td>
                      <input value="" type='text' id='proxy-text-color' class='color {hash: true}'></input>
                      <div id="proxy-text-color-picker" class="picker"></div>
                    </td>
                  </tr>

                  <tr>
                    <td>Background color:</td>
                    <td>
                      <input type='text' id='proxy-bg-color' class='color {hash: true}'></input>
                      <input type='checkbox' id='proxy-bg-color-transparent'></input> <span>transparent</span>
                      <div id="proxy-bg-color-picker" class="picker"></div>
                    </td>
                  </tr>

                  <tr>
                    <td>Link text color:</td>
                    <td>
                      <input type='text' id='proxy-link-text-color' class='color {hash: true}'></input>
                      <div id="proxy-link-text-color-picker" class="picker"></div>
                    </td>
                  </tr>

                  <tr>
                    <td>Header text color:</td>
                    <td>
                      <input type='text' name="header_text_color" id='proxy-header-text-color'></input>
                      <div id="proxy-header-text-color-picker" class="picker"></div>
                    </td>
                  </tr>

                  <tr>
                    <td>Header background color:</td>
                    <td>
                      <input type='text' id='proxy-header-bg-color' class='color {hash: true}'></input>
                      <div id="proxy-header-bg-color-picker" class="picker"></div>
                    </td>
                  </tr>

                  <tr>
                    <td valign='top'>Font:</td>
                    <td>
                      <select id='proxy-font-size'>
                        <?php
                          $i = 6;
                          for ($i; $i <= 24; $i++) {
                            $v = $i . "px";
                            ?>
                            <option value="<?php echo $v ?>"><?php echo $v ?></option>
                            <?php
                          }
                        ?>
                      </select>
                      <select id='proxy-font-family'>
                        <?php
                          $font_family = esc_attr(get_option(WPJS_OPT_WIDGET . 'font_family'));

                          foreach ($font_family_list as $font) {
                            $font_display_name = array_shift($font);
                            $font_value = array_shift($font);
                        ?>
                        <option <?php echo $font_family == $font_value ? "selected" : NULL ?> value="<?php echo $font_value ?>"><?php echo str_replace("'", '', $font_display_name) ?></option>
                        <?php } ?>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Sharing icons:</td>
                    <td>
                      <select id='proxy-show-social-sharing'>
                        <option value='none' default='default'>Don't Display</options>
                        <option value='top'>Display on Top</options>
                        <option value='bottom'>Display on Bottom</options>
                        <option value='both'>Display on Top and Bottom</options>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Show filters for:</td>
                    <?php
                      $filter_fields = esc_attr(get_option(WPJS_OPT_WIDGET . 'filter_fields'));
                    ?>
                    <td>
                      <input <?php echo preg_match("/department/i", $filter_fields) || !$filter_fields ? "checked" : "" ?> type='checkbox'  id='dropdown-filter-department'></input><label class='checkbox' for='dropdown-filter-department'>Department</label>
                      <input <?php echo preg_match("/location/i", $filter_fields) || !$filter_fields ? "checked" : "" ?> type='checkbox'  id='dropdown-filter-location'></input><label class='checkbox' for='dropdown-filter-location'>Location</label>
                    </td>
                  </tr>

                  <tr>
                    <td>Show header:</td>
                    <td>
                      <input type='checkbox' <?php echo !esc_attr(get_option(WPJS_OPT_WIDGET . 'show_header')) ? 'checked' : ''  ?> id='proxy-show-header'></input><label class='checkbox' for='proxy-show-header'></label>
                    </td>
                  </tr>

                  <tr>
                    <td>Show talent network:</td>
                    <td>
                      <input type='checkbox' <?php echo !esc_attr(get_option(WPJS_OPT_WIDGET . 'show_talent_network')) ? 'checked' : ''  ?> checked='checked' id='proxy-show-talent-network'></input><label class='checkbox' for='proxy-show-talent-network'></label>
                    </td>
                  </tr>

                  <tr>
                    <td>Show search bar:</td>
                    <td>
                      <?php
                        $searchbar_count = esc_attr(get_option(WPJS_OPT_WIDGET . 'show_searchbar_count'));
                      ?>
                      <select id='proxy-show-searchbar-count'>
                        <option <?php echo $searchbar_count == '-1' ? "selected" : "" ?> value='-1'>Never Show</options>
                        <option <?php echo $searchbar_count == '0' ? "selected" : "" ?> value='0'>Always Show</options>
                        <option <?php echo $searchbar_count == '10' || !$searchbar_count ? "selected" : "" ?> value='10'>After 10 Jobs Shown</options>
                        <option <?php echo $searchbar_count == '20' ? "selected" : "" ?> value='20'>After 20 Jobs Shown</options>
                        <option <?php echo $searchbar_count == '30' ? "selected" : "" ?> value='30'>After 30 Jobs Shown</options>
                        <option <?php echo $searchbar_count == '50' ? "selected" : "" ?> value='50'>After 50 Jobs Shown</options>
                        <option <?php echo $searchbar_count == '100' ? "selected" : "" ?> value='100'>After 100 Jobs Shown</options>
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td colspan='2' class="break-line"><hr/></td>
                  </tr>

                  <tr>
                    <td id="advanced-filtering-message">
                      Need more control?
                    </td>
                    <td>
                      You can change almost anything using our
                      <a href='https://support.jobscore.com/entries/20655207-embedding-the-jobscore-jobs-widget-on-your-careers-page-beta-release' target="_blank">
                        advanced filtering and styling controls &raquo;
                      </a>
                    </td>
                  </tr>
                </table>
              </div><!-- panel -->
            </div><!--section-body -->
          </div>
        </td>

        <td valign='top' class="metabox-holder" style='padding-left:20px'>
          <div style="width: 100%" class='postbox-container'>
            <div class='postbox'>
              <div class='border'>
                <h3 class="hndle">Job List Preview</h3>
                <div class='inside'>
                  <div id='widget-preview-container' class='panel'>
                    <div id='widget'>
                    </div>
                  </div>
                </div><!--section-body -->
              </div><!-- border -->
            </div>
          </div>
        </td>
      </tr>
    </table>
  </form>

  <div class='shadow-outer' style='display:none;'>
    <div class='shadow'>
      <div class='border'>
        <div class='sectionHead_md expandable collapsed'>Advanced Options</div>
        <div class='section-body'>
          <table id='advanced-options-table' class='options'>
            <!-- advanced options get rendered here -->
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type='text/javascript' src='<?php echo WPJS_URL . '/js/widget_builder.js' ?>'></script>
<script type='text/javascript' src='<?php echo WPJS_URL . '/js/widget_base.js' ?>' id='widget-loader-script'></script>

<script id='template-expert-options' type='text/x-template-underscore'>
  {{ var default_val = ''; }}
  {{ jQuery.each(fields, function(option, params) { }}
    {{ default_val = params['default'] ? 'value="' + params['default'] + '"' : ''; }}
  <tr>
    <td>{{= option.spacerize().capitalize() }}:</td>
    <td>
    {{ if (params.type == 'text') { }}
      <input id='{{= option.domidize() }}' {{raw default_val }} type='text' size='44'></input>
    {{ } else if (params.type =='checkbox') { }}
        {{ if (params['default'] == true) { }}
          <input id='{{raw option.domidize() }}' type='checkbox' checked='checked'></input>
        {{ } else { }}
          <input id='{{raw option.domidize() }}' type='checkbox'></input>
        {{ } }}
    {{ } else if (params.type =='color') { }}
      <input id='{{raw option.domidize() }}' {{raw default_val }} type='text'></input>
    {{ } else { }}
      <input id='{{raw option.domidize() }}' {{raw default_val }} type='text'></input>
    {{ } }}
    </td>
  </tr>
  {{ }); }}
</script>
