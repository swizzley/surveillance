<?php
$CONFIG = array(
  'instanceid' => '521d92aa255d5',
  'passwordsalt' => '6b947f2455819d60f0e8f3ed47b06f',
  'datadirectory' => '/var/www/owncloud/data',
  'dbtype' => 'mysql',
  'version' => '5.0.20',
  'dbname' => 'owncloud',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'owncloud',
  'dbpassword' => 'secret',
  'installed' => true,
  'theme' => '',
  'maintenance' => false,
  'ldapIgnoreNamingRules' => false,
  'forcessl' => true,
  'maxZipInputSize' => 838860800,
  'allowZipDownload' => true,

/* Blacklist a specific file and disallow the upload of files with this name - WARNING: USE THIS ONLY IF YOU KNOW WHAT YOU ARE DOING. */
"blacklisted_files" => array('.htaccess'),

/* The automatic hostname detection of ownCloud can fail in certain reverse proxy situations. This option allows to manually override the automatic detection. You can also add a port. For example "www.example.com:88" */
"overwritehost" => "cloud.kuraas.no",

/* The automatic protocol detection of ownCloud can fail in certain reverse proxy situations. This option allows to manually override the protocol detection. For example "https" */
"overwriteprotocol" => "https",

/* The automatic webroot detection of ownCloud can fail in certain reverse proxy situations. This option allows to manually override the automatic detection. For example "/domain.tld/ownCloud" */
/*"overwritewebroot" => "/",*/

/* The automatic detection of ownCloud can fail in certain reverse proxy situations. This option allows to define a manually override condition as regular expression for the remote ip address. For example "^10\.0\.0\.[1-3]$" */
/*"overwritecondaddr" => "",*/

/* Theme to use for ownCloud */
/*"theme" => "",*/

/* Optional ownCLoud default language - overrides automatic language detection on public pages like login or shared items. This has no effect on the users's language preference configured under "personal -> language" once they have logged in */
"default_language" => "nb_NO",

/* Default app to load on login */
"defaultapp" => "files",

/* Enable the help menu item in the settings */
"knowledgebaseenabled" => true,

/* URL to use for the help page, server should understand OCS */
"knowledgebaseurl" => "http://api.apps.owncloud.com/v1",

/* Enable installing apps from the appstore */
"appstoreenabled" => true,

/* URL of the appstore to use, server should understand OCS */
"appstoreurl" => "http://api.apps.owncloud.com/v1",

/* How long should ownCloud keep deleted files in the trash bin, default value:  180 days */
'trashbin_retention_obligation' => 180,

/* allow user to change his display name, if it is supported by the back-end */
'allow_user_to_change_display_name' => false,

/* Check 3rdparty apps for malicious code fragments */
"appcodechecker" => "",

/* Check if ownCloud is up to date */
"updatechecker" => true,

/* Place to log to, can be owncloud and syslog (owncloud is log menu item in admin menu) */
"log_type" => "owncloud",

/* File for the owncloud logger to log to, (default is ownloud.log in the data dir */
"logfile" => "",

/* Loglevel to start logging at. 0=DEBUG, 1=INFO, 2=WARN, 3=ERROR (default is WARN) */
"loglevel" => "",

/* Lifetime of the remember login cookie, default is 15 days */
"remember_login_cookie_lifetime" => 60*60*24*15,

/* Life time of a session after inactivity */
"session_lifetime" => 60 * 60 * 24,

/* Custom CSP policy, changing this will overwrite the standard policy */
"custom_csp_policy" => "default-src 'self'; script-src 'self' 'unsafe-eval'; style-src 'self' 'unsafe-inline'; frame-src *; img-src *; font-src 'self' data:; media-src *",

/* Enable/disable X-Frame-Restriction */
/* HIGH SECURITY RISK IF DISABLED*/
"xframe_restriction" => true,

/* The directory where the user data is stored, default to data in the owncloud
 * directory. The sqlite database is also stored here, when sqlite is used.
 */
// "datadirectory" => "",

/* Enable maintenance mode to disable ownCloud */
"maintenance" => false,

"apps_paths" => array(

/* Set an array of path for your apps directories
 key 'path' is for the fs path and the key 'url' is for the http path to your
 applications paths. 'writable' indicate if the user can install apps in this folder.
 You must have at least 1 app folder writable or you must set the parameter : appstoreenabled to false
*/
	array(
		'path'=> '/var/www/owncloud/apps',
		'url' => '/apps',
		'writable' => true,
	),
),

);
