<?php
defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.

// ##BEGIN_PAGE_1## Install Wizard Page One Items:
	$dbType = "mysql";
	$dbName = 'bmlt';
	$dbServer = 'localhost';
	$dbUser = 'root';
	$dbPassword = 'button44';
	$dbPrefix = "na";
	$bmlt_title = "Basic Meeting List Toolbox Root Server";
// ##END_PAGE_1##

// ##BEGIN_PAGE_2## Install Wizard Page Two Items:
	$theme = "default";
	$comdef_global_language = "en";
	$min_pw_len = 6;
	$any_service_body_admin_can_edit_formats = false;
	$any_service_body_admin_can_create_service_bodies = false;
// ##END_PAGE_2##

// ##BEGIN_PAGE_3## Install Wizard Page Three Items:
	$region_bias = null;
	$gkey = "AIzaSyBkXMRlPiG5wiWWGel1x8TfieMfchPanZw";
	$search_spec_map_center = array ( 'longitude' => -87.0556640625, 'latitude' => 35.782170703266075, 'zoom' => 5 );
// ##END_PAGE_3##

// ##BEGIN_PAGE_3## Install Wizard Page Three Items:
	$region_bias = null;
	$gkey = "AIzaSyBkXMRlPiG5wiWWGel1x8TfieMfchPanZw";
	$search_spec_map_center = array ( 'longitude' => -86.890869140625, 'latitude' => 35.862343734896484, 'zoom' => 7 );
// ##END_PAGE_3##

// ##BEGIN_PAGE_4## Install Wizard Page Four Items:
	$results_per_page = "30";
	$number_of_meetings_for_auto = "10";
	$default_basic_search = "text";
	$default_sort_key = "weekday";
	$default_sort_dir = "asc";
	$static_map_size = array ( 'width' => 600, 'height'=> 600 );
	$time_format = "g:i A";
	$change_date_format = "g:i A, n/j/Y";
	$change_depth_for_meetings = "5";
	$allow_contact_form = true;
	$recursive_contact_form = true;
	$allow_pdf_downloads = true;
	$banner_text = 'Volunteer Region';
	$default_sorts = array ('weekday' => array('weekday_tinyint','location_municipality','location_city_subsection','start_time','location_neighborhood'),'time' => array('weekday_tinyint','start_time','location_municipality','location_city_subsection','location_neighborhood'),'town' => array('location_municipality','location_city_subsection','location_neighborhood','weekday_tinyint','start_time'));
	$page_display_size = 11;			// This is the number of page links shown in the list view before the elipsis (...) is shown to separate them.
	$disable_zoom_in_clicks = false;	// Set this to true if you want the first click to always result in a search, even if the map is zoomed far out.
	$sort_depth = 8;
	$root_server = null;
	$comdef_native_service_body = 1;	// This is the ID of the default Service body, selected in the popup for new meetings.
	$serverNamespace = null;
	$admin_session_name = 'BMLT_Admin';
	$client_session_name = 'BMLT_Satellite';
	$comdef_distance_units = 'mi';
	$comdef_show_sb_desc = false;
	if ( !defined ( '_DEFAULT_DURATION' ) ) define ( '_DEFAULT_DURATION', 'N.A. Meetings are usually 90 minutes long (an hour and a half), unless otherwise indicated.' );
	if ( !defined ( 'WC_FORMAT' ) ) define ( 'WC_FORMAT', '33' );	// These are used for the NAWS format translation. They are the shared IDs of the wheelchair, open and closed formats.
	if ( !defined ( 'O_FORMAT' ) ) define ( 'O_FORMAT', '17' );
	if ( !defined ( 'C_FORMAT' ) ) define ( 'C_FORMAT', '4' );
// ##END_PAGE_4##
?>