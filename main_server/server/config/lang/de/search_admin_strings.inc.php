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
											array ( 'login' => 'Login-ID',
													'password' => 'Passwort',
													'button' => 'Anmelden',
													'cookie' =>'Um diesen Server zu verwalten müssen Cookies erlaubt sein.',
													'noscript' => 'Um diesen Server zu verwalten muss JavaScript erlaubt sein.',
													'title' => 'Bitte einloggen, um den Server zu verwalten.',
													'not_auth_1' => 'Nicht autorisiert',
													'not_auth_2' => 'Du bist nicht autorisiert um diesen Server zu verwalten.',
													'not_auth_3' => 'Es gibt ein Problem mit dem Benutzernamen oder das Passwort.'
													),
										'Edit_Meeting' =>
											array (	'auth_failure' => 'Du bist nicht autorisiert um dieses Meeting zu verwalten.',
													'revert_failure' => 'Es gab einen Fehler in der Sitzung.',
													'object_not_found' => 'Fehler: Das Meeting wurde nicht gefunden.',
													'object_not_changed' => 'Fehler: Das Meeting wurde nicht geändert.',
													'meeting_id' => 'Meeting ID:',
													'changes' => 'Änderungshistorie',
													'changed_by' => 'Geändert von ',
													'created_by' => 'Erstellt von ',
													'change_revert' => 'Zurück zum Zustand vor dieser Änderung.',
													'change_revert_title' => 'Dies wird die Sitzung in den Zustand vor dieser Änderung zurücksetzen.',
													'change_revert_confirm' => 'Sind Sie sicher, dass Sie die Sitzung in den Zustand vor dieser Änderung zurücksetzen möchten?',
													'changed_on' => ' auf ',
													'meeting_deleted' => 'Gelöschte Meeting ID:',
													'meeting_reverted' => 'Zurückgesetzte Meeting ID:',
													'weekday' => 'Wochentagy',
													'starts_at' => 'Beginnt um ',
													'duration' => 'Dauer',
													'data_values' => 'Meetings-Daten',
													'will_be_deleted' => ' werden gelöscht. ',
													'follow_link_undel' => 'Wiederherstellen.',
													'follow_link_add' => 'Datenelemente hinzuzufügen.',
													'button_do_not_add' => 'Diese Daten nicht hinzufügen',
													'meeting_id' => 'Meetings ID',
													'world_id' => 'World ID',
													'meeting_format' => 'Meetings-Format',
													'service_body' => 'Service Body',
													'language' => 'Sprache',
													'long_lat' => 'Längen-und Breitengrad',
													'set_loc' => 'Koordinaten auf Google-Maps auswählen.',
													'button_delete_dataitem' => 'Diese Daten löschen',
													'button_delete_meeting' => 'Meeting löschen',
													'button_submit_changes' => 'Änderungen speichern',
													'close_window' => 'Fenster schließen',
													'dirty_confirm' => 'Die Änderungen wirklich verwerfen?',
													'delete_confirm' => 'Das Meeting wirklich löschen?',
													'noscript_warning' => 'Um diese Seite zu nutzen, muss Javascript in Deinem Browser aktiviert sein!',
													'published' => 'Meeting ist Veröffentlicht',
													'unknown_bulk_operation' => 'Unbekannt Massenvorgang',
													'meeting_does_not_exist' => 'Das Meeting existiert nicht',
													'bulk_delete_confirm' => 'Wirklich diese Meetings löschen?',
													'bulk_delete_confirm_ep' => 'Wirklich diese Meetings endgültig löschen?',
													'bulk_copy_confirm' => 'Wirklich diese Meetings kopieren?',
													'long_label' => 'Längengrad',
													'lat_label' => 'Breitengrad',
													'delete_extreme_prejudice' => 'Meeting endgültig löschen',
													'perm_delete_confirm' => 'Wirklich dieses Meeting endgültig löschen?',
													'delete_extreme_prejudice_title' => 'Diese Aktion löscht alle Änderungen und Aufzeichnungen dieses Meetings.',
													'meeting_permanently_deleted' => 'Endgültig dieses Meeting löschen ',
													'copy_prompt' => 'kopieren',
													'cant_publish_no_location' => 'Meeting kann wegen fehlendem Längen-und Breitengrad nicht veröffentlicht werden.',
													'cant_publish_meetinglist_admin' => 'Du bist nicht berechtigt, dieses Meeting zu veröffentlichen.',
													'cant_publish_duplicate' => 'Du kannst dieses Meeting nicht veröffentlichen, da es sich um eine Kopie handelt. Zuerst die Kopie löschen.',
													'copy' => "Dies ist ein kopiertes Meeting. Es kann erst veröffentlicht werden, wenn die Kopie gelöscht wurde.",
													'duplicate_string' => "Dies ist ein kopiertes Meeting. Es kann erst veröffentlicht werden, wenn die Kopie gelöscht wurde.",
													'unpublished_string' => "Dies ist ein unveröffentlichtes Meeting.",
													'email_contact' => 'Email Kontakt',
													'email_contact_note' => 'Dies wurde noch nie veröffentlicht.',
													'email_format_bad' => 'Die eingegebene Email-Adresse wurde nicht korrekt formatiert.',
													'visibility_prompt' => 'Feld Sichtweite',
													'visibility_value_all' => 'Sichtbar für Alle',
													'visibility_value_admin' => 'Nur für Administratoren sichtbar',
													'visibility_value_web_mob' => 'Nur für Web- und Mobile-Benutzer sichtbar',
													'visibility_value_web' => 'Nur für Web-Benutzer sichtbar',
													'visibility_value_mob' => 'Nur für Mobile-Benutzer sichtbar',
													'visibility_value_print' => 'Nur sichtbar wenn ausgedruckt wird'
													),
										'Edit_Formats' =>
											array (	'auth_failure' => 'Du bist nicht autorisiert um Formate zu ändern.',
													'dirty_confirm' => 'Wirklich das Fenster ohne vorher zu speichern schließen?',
													'delete_confirm' => 'Wirklich dieses Format löschen?',
													'change_button' => 'Format ändern',
													'delete_button' => 'Format löschen',
													'copy_button' => 'Format kopieren',
													'add_button' => 'Format hinzufügen',
													'change_revert_confirm' => 'Wirklich diesen Datensatz auf den alten Werten zurücksetzen?',
													'object_not_found' => 'Fehler: Das Format wurde nicht gefunden.',
													'object_not_changed' => 'Fehler: Das Format wurde nicht geändert.',
													'format_key_not_unique' => 'Fehler: Das Format ist nicht eindeutig.',
													'no_formats' => 'Es gibt keine Formate zum editieren.',
													'no_blank' => 'Leere Formate sind nicht erlaubt.',
													'name_label' => 'Name',
													'key_label' => 'Key',
													'sid_label' => 'Shared ID',
													'type_label' => 'Format Type',
													'native_lang' => 'Native Server Sprache',
													'new_format' => 'Neues Format',
													'description_label' => 'Beschreibung',
													'FormatsDiv' => 'Format editieren',
													'sort_select_label' => 'Sortiere Formats von',
													'sort_option_id' => 'ID',
													'sort_option_type' => 'Format Type',
													'sort_option_key' => 'Key'
												),
										'Edit_Meetings' =>
											array (	'auth_failure' => 'Du bist nicht autorisiert um dieses Meeting zu editieren.',
													'deleteds' => 'Gelöschte Meetings',
													'id' => 'ID ',
													'the_meeting' => 'Das meeting "',
													'deleted_by' => '" wurde gelöscht von ',
													'changed_by' => '" wurde geändert von ',
													'created_by' => '" wurde angelegt von ',
													'revert_meeting' => 'Setze das Meeting auf den Stand vor diesen Änderungen zurück',
													'revert_meeting_title' => 'Dies setzt das Meeting auf den vorherigen Stand zurück.',
													'undelete_meeting' => 'Wiederherstellung des gelöschten Meetings',
													'undelete_meeting_confirm' => 'Wirklich das gelöschte Meeting wiederherstellen?',
													'undelete_meeting_title' => 'Dies stellt das gelöschte Meeting wieder her.',
													'met_on' => 'Das Meeting trifft sich um ',
													'met_at' => ' bei ',
													'NewMeeting' => 'Erstelle ein neues Meeting',
													'change_visit_title' => 'Aktuelle Einstellungen des Meetings',
													'change_visit' => 'Zeige das aktuelle Meeting',
													'edit_data_item_value_textarea_label' => 'Wert für ale diese Meetings anwenden',
													'edit_data_item_value_cancel_button' => 'Abbruch',
													'edit_data_item_value_apply_button' => 'Anwenden',
													'edit_data_item_value_apply_confirm' => 'Wirklich diesen Wert auf alle diese Meetings anwenden?\nVorhandene Werte werden bei den ausgewählten Meetings überschrieben.',
													'edit_data_item_value_apply_confirm_delete' => 'Wirklich diesen Wert bei all diesen Meetings löschen?',
													'edit_data_item_value_apply_confirm_delete_oops' => 'Daten können erst gelöscht werden, wenn das Kontrollkästchen deselektiert wurde.',
													'edit_data_item_value_apply_confirm_canceled' => 'Die Daten wurden nicht angewandt.',
													'edit_data_item_value_apply_complete1' => 'Erfolgreich geändert: ',
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
												array (	'logged_in' => 'Du bist angemeldet als ',
														'login_name' => ', und deine Anmelde-ID ist ',
														'edit_link' => 'Funktionen bearbeiten',
														'meeting_search' => 'Meetings Suche',
														'logout' => 'Abmelden',
														'login' => 'Anmelden'
													),
											'Admin_Spec' =>
												array (	'admin_fieldset_name' => 'Administrative Optionen',
														'admin_select_published_label' => 'Suche nach',
														'admin_select_published_option_unpub' => 'nur unveröffentliche Meetings',
														'admin_select_published_option_anypub' => 'un- und veröffentliche Meetings',
														'admin_select_published_option_pub' => 'nur veröffentliche Meetings'
													),
											'Admin_Reports' =>
												array (	'reports_div_title' => 'Historie',
														'meeting_reports_div_title' => 'Meetings Änderungen',
														'deleted_meeting_reports_div_title' => 'Gelöschte Meetings',
														'changed_meeting_reports_div_title' => 'Geänderte Meetings',
														'new_meeting_reports_div_title' => 'Neue Meetings'
													)
										);
?>