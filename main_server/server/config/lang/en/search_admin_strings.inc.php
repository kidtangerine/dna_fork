<?php
/***********************************************************************/
/** \file	search_admin_strings.inc.php
	\brief	The strings displayed in the search admin for this language (English)
    
    This file is part of the Basic Meeting List Toolbox (BMLT).
    
    Find out more at: http://magshare.org/bmlt

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this code.  If not, see <http://www.gnu.org/licenses/>.*/	
	defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.

	$comdef_search_admin_strings = array (
										'Login_Form' =>
											array ( 'login' => 'Login ID',
													'password' => 'Password',
													'button' => 'Log In',
													'cookie' =>'You must enable cookies in order to administer this server.',
													'noscript' => 'You cannot administer this site without JavaScript.',
													'title' => 'Please log in to administer the server.',
													'not_auth_1' => 'NOT AUTHORIZED',
													'not_auth_2' => 'You are not authorized to administer this server.',
													'not_auth_3' => 'There was a problem with the user name or password that you entered.'
													),
										'Edit_Meeting' =>
											array (	'auth_failure' => 'You are not authorized to edit this meeting.',
													'revert_failure' => 'There was an error in the meeting revert.',
													'object_not_found' => 'ERROR: The meeting was not found.',
													'object_not_changed' => 'ERROR: The meeting was not changed.',
													'meeting_id' => 'Meeting ID:',
													'changes' => 'Change History',
													'changed_by' => 'Changed by ',
													'created_by' => 'Created by ',
													'change_revert' => 'Revert to the state before this change.',
													'change_revert_title' => 'This will return the meeting to the state it was before this change.',
													'change_revert_confirm' => 'Are you sure that you want to return the meeting to the state it was before this change?',
													'changed_on' => ' on ',
													'meeting_deleted' => 'Deleted Meeting ID:',
													'meeting_reverted' => 'Reverted Meeting ID:',
													'weekday' => 'Weekday',
													'starts_at' => 'Starts at',
													'duration' => 'Duration',
													'data_values' => 'Meeting Data Values',
													'will_be_deleted' => ' will be deleted. ',
													'follow_link_undel' => ' Follow this link to undelete it.',
													'follow_link_add' => 'Follow this link to add a new data item.',
													'button_do_not_add' => 'Do Not Add This Data Item',
													'meeting_id' => 'Meeting ID',
													'world_id' => 'World ID',
													'meeting_format' => 'Meeting Format',
													'service_body' => 'Service Body',
													'language' => 'Language',
													'long_lat' => 'Longitude and Latitude',
													'set_loc' => 'Follow this link to set a meeting location.',
													'button_delete_dataitem' => 'Delete This Data Item',
													'button_delete_meeting' => 'Delete This Meeting',
													'button_submit_changes' => 'Submit Changes',
													'close_window' => 'Close Window',
													'dirty_confirm' => 'Are you sure you want to close the edit window without saving your changes?',
													'delete_confirm' => 'Are you sure you want to delete this meeting?',
													'noscript_warning' => 'You must have JavaScript enabled on your browser for this to work!',
													'published' => 'Meeting is Published',
													'unknown_bulk_operation' => 'Unkown Bulk Operation',
													'meeting_does_not_exist' => 'The meeting does not exist',
													'bulk_delete_confirm' => 'Are you sure that you want to delete these meetings?',
													'bulk_delete_confirm_ep' => 'Are you sure that you want to permanently delete these meetings?',
													'bulk_copy_confirm' => 'Are you sure that you want to make copies of these meetings?',
													'long_label' => 'Longitude',
													'lat_label' => 'Latitude',
													'delete_extreme_prejudice' => 'Delete Meeting Permanently',
													'perm_delete_confirm' => 'Are you sure that you want to permanently delete this meeting?',
													'delete_extreme_prejudice_title' => 'This will delete all changes and records of this meeting.',
													'meeting_permanently_deleted' => 'Permanently deleted the meeting ',
													'copy_prompt' => 'Duplicate',
													'cant_publish_no_location' => 'You cannot publish this meeting because a longitude and latitude have not yet been set.',
													'cant_publish_meetinglist_admin' => 'You cannot publish this meeting because you are not allowed to do so.',
													'cant_publish_duplicate' => 'You cannot publish this meeting because it is a duplicate, and you need to first remove the "Duplicate" data item.',
													'copy' => "This is a duplicate meeting, and can't be published until you delete this data item.",
													'duplicate_string' => "This is a duplicate meeting, and can't be published until you delete the Duplicate data item.",
													'unpublished_string' => "This is an unpublished meeting.",
													'email_contact' => 'Email Contact',
													'email_contact_note' => 'This is never disclosed publicly',
													'email_format_bad' => 'The email address that you entered was not formatted correctly.',
													'visibility_prompt' => 'Field Visibility',
													'visibility_value_all' => 'Visible to All',
													'visibility_value_admin' => 'Visible Only to Administrators',
													'visibility_value_web_mob' => 'Visible Only to Web Users and Mobile Users',
													'visibility_value_web' => 'Visible Only to Web Users',
													'visibility_value_mob' => 'Visible Only to Mobile Users',
													'visibility_value_print' => 'Visible Only When Printed'
													),
										'Edit_Formats' =>
											array (	'auth_failure' => 'You are not authorized to edit formats on this server.',
													'dirty_confirm' => 'Are you sure you want to close the edit window without saving your changes?',
													'delete_confirm' => 'Are you sure you want to delete this format?',
													'change_button' => 'Change Format',
													'delete_button' => 'Delete Format',
													'copy_button' => 'Copy Format',
													'add_button' => 'Add Format',
													'change_revert_confirm' => 'Are you sure that you want to return the format to the state it was before this change?',
													'object_not_found' => 'ERROR: The format was not found.',
													'object_not_changed' => 'ERROR: The format was not changed.',
													'format_key_not_unique' => 'ERROR: The format key is not unique.',
													'no_formats' => 'There are no formats to edit.',
													'no_blank' => 'Blank formats are not allowed.',
													'name_label' => 'Name',
													'key_label' => 'Key',
													'sid_label' => 'Shared ID',
													'type_label' => 'Format Type',
													'native_lang' => 'Native Server Language',
													'new_format' => 'New Format',
													'description_label' => 'Description',
													'FormatsDiv' => 'Edit Formats',
													'sort_select_label' => 'Sort Formats by',
													'sort_option_id' => 'ID',
													'sort_option_type' => 'Format Type',
													'sort_option_key' => 'Key'
												),
										'Edit_Meetings' =>
											array (	'auth_failure' => 'You are not authorized to edit meetings on this server.',
													'deleteds' => 'Deleted Meetings',
													'id' => 'ID ',
													'the_meeting' => 'The meeting "',
													'deleted_by' => '" was deleted by ',
													'changed_by' => '" was changed by ',
													'created_by' => '" was created by ',
													'revert_meeting' => 'Revert This Meeting to the State Before This Change',
													'revert_meeting_title' => 'This will revert the meeting to the state it was just prior to being changed.',
													'undelete_meeting' => 'Restore This Deleted Meeting',
													'undelete_meeting_confirm' => 'Are You Sure That You Want to Restore This Deleted Meeting?',
													'undelete_meeting_title' => 'This will undelete the meeting to the state it was just prior to being deleted.',
													'met_on' => 'The meeting met on ',
													'met_at' => ' at ',
													'NewMeeting' => 'Create a New Meeting',
													'change_visit_title' => 'See the meeting as it is currently displayed',
													'change_visit' => 'View the Current Meeting',
													'edit_data_item_value_textarea_label' => 'Value to Apply to All These Meetings',
													'edit_data_item_value_cancel_button' => 'Cancel',
													'edit_data_item_value_apply_button' => 'Apply',
													'edit_data_item_value_apply_confirm' => 'Are you sure that you want to apply this value to all these meetings?\nIt will replace any previous values in the selected meetings.',
													'edit_data_item_value_apply_confirm_delete' => 'Are you sure that you want to delete this data item from all these meetings?',
													'edit_data_item_value_apply_confirm_delete_oops' => 'You cannot delete a data item unless you select the Change existing values checkbox.',
													'edit_data_item_value_apply_confirm_canceled' => 'The data items were not applied.',
													'edit_data_item_value_apply_complete1' => 'Successfully changed the ',
													'edit_data_item_value_apply_complete2' => ' data item value to "',
													'edit_data_item_value_apply_complete3' => '" for the meetings with the following IDs: ',
													'no_meetings_checked_alert' => 'You must check at least one meeting for this operation to be successful.',
													'edit_data_item_override_checkbox_label' => 'Change existing values.',
													'edit_data_item_override_checkbox_title' => 'Checking this will force the value to be written, overriding any previous value. Otherwise, existing values will be left alone.'
												),
										'Edit_Service_Bodies' =>
											array (	'auth_failure' => 'You are not authorized to edit this service body.',
													'sql_err' => 'There was an error in the server.',
													'no_reassignment_meetings' => 'There was no valid reassignment of the service body meetings.',
													'no_reassignment_sb' => 'There was no valid reassignment of the service bodies "owned" by this service body.',
													'Edit_Bodies' => 'Edit Service Bodies',
													'World_ID' => 'World ID',
													'service_body_id' => 'Service Body ID',
													'object_not_found' => 'ERROR: The service body was not found.',
													'object_not_changed' => 'ERROR: The service body was not changed.',
													'server_not_instantiated' => 'ERROR: The server encountered an error in which it could not create a basic server object.',
													'Name' => 'Name',
													'Description' => 'Description',
													'Language' => 'Language',
													'Primary_Parent' => 'Primary Parent Service Body',
													'Secondary_Parent' => 'Secondary Parent Service Body',
													'no_primary_owner' => 'No Primary Parent Service Body',
													'no_secondary_owner' => 'No Secondary Parent Service Body',
													'delete_sb_confirm' => 'Are you sure that you want to delete this Service Body?',
													'deleted_sb' => 'The Service Body Has Been Deleted.',
													'select_sb' => 'Select a Service Body Type',
													'delete_sb_name' => 'Delete This Service Body',
													'change_sb_name' => 'Change This Service Body',
													'New_Name' => 'Create A New Service Body',
													'sb_admin' => 'Service Body Administrator',
													'sb_type' => 'Service Body Type',
													'sb_editors' => 'Editors',
													'sb_uri' => 'URI',
													'sb_kml_uri' => 'KML File URI',
													'sb_ContactEmail' => 'Meeting Contact Email Address',
													'not_allowed_reassign' => 'You are not authorized to reassign these meetings.'
												),
											'Edit_Users' =>
												array (	'Edit_Users' => 'Edit Users',
														'Edit_My_Info' => 'Edit My Account',
														'Change_My_Info' => 'Change My Account',
														'user_login_string' => 'Login ID',
														'user_password_string' => 'Enter New Password',
														'user_password_string_warning' => 'NOTE: This will replace the current password. Leave blank unless changing the password.',
														'user_name_string' => 'Name',
														'new_user_name' => 'Create New User',
														'user_description_string' => 'Description',
														'user_email_string' => 'Email',
														'user_level_string' => 'User Level',
														'Language' => 'Language',
														'delete_user_confirm' => 'Are you sure that you want to delete this user?',
														'delete_user_name' => 'Delete This User',
														'change_user_name' => 'Change This User',
														'New_Name' => 'Create A New User',
														_USER_LEVEL_SERVER_ADMIN => 'Server Administrator',
														_USER_LEVEL_SERVICE_BODY_ADMIN => 'Service Body Administrator',
														_USER_LEVEL_EDITOR => 'Meeting List Editor',
														_USER_LEVEL_DISABLED => 'Disabled',
														_USER_LEVEL_OBSERVER => 'Observer',
														'del_message' => 'The user ##USER## was deleted.',
														'dup_login' => 'This login ID is already in use. Please select another one.',
														'auth_failure' => 'You are not authorized to edit this user.',
														'user_id' => 'User ID',
														'object_not_found' => 'ERROR: The user was not found.',
														'object_not_changed' => 'ERROR: The user was not changed.',
														'pw_too_short' => 'The password is too short. It needs to be at least ##MIN_PW_LEN## characters long.',
														'server_not_instantiated' => 'ERROR: The server encountered an error in which it could not create a basic server object.'
													),
											'Admin_Bar' =>
												array (	'logged_in' => 'You are currently logged in as a ',
														'login_name' => ', and your login ID is ',
														'edit_link' => 'Edit Functions',
														'meeting_search' => 'Meeting Search',
														'logout' => 'Log Out',
														'login' => 'Log In'
													),
											'Admin_Spec' =>
												array (	'admin_fieldset_name' => 'Administration Options',
														'admin_select_published_label' => 'Search for',
														'admin_select_published_option_unpub' => 'unpublished meetings only',
														'admin_select_published_option_anypub' => 'unpublished or published meetings',
														'admin_select_published_option_pub' => 'published meetings only'
													),
											'Admin_Reports' =>
												array (	'reports_div_title' => 'History',
														'meeting_reports_div_title' => 'Meeting Changes',
														'deleted_meeting_reports_div_title' => 'Deleted Meetings',
														'changed_meeting_reports_div_title' => 'Changed Meetings',
														'new_meeting_reports_div_title' => 'New Meetings'
													)
										);
?>