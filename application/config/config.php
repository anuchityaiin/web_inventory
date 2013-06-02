<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
*/
$config['base_url']	= '';

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
*/
$config['index_page'] = 'index.php'; 


/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
*/
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
*/

$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
*/
$config['enable_hooks'] = FALSE;


/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
*/
$config['subclass_prefix'] = 'MY_';


/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
*/
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';


/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
*/
$config['allow_get_array']		= TRUE;
$config['enable_query_strings'] = FALSE;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger']	= 'd'; // experimental not currently in use

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
*/
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
*/
$config['log_path'] = '';

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
*/
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
*/
$config['cache_path'] = '';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
*/
$config['encryption_key'] = '';

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
|
| 'sess_cookie_name'		= the name you want for the cookie
| 'sess_expiration'			= the number of SECONDS you want the session to last.
|   by default sessions last 7200 seconds (two hours).  Set to zero for no expiration.
| 'sess_expire_on_close'	= Whether to cause the session to expire automatically
|   when the browser window is closed
| 'sess_encrypt_cookie'		= Whether to encrypt the cookie
| 'sess_use_database'		= Whether to save the session data to a database
| 'sess_table_name'			= The name of the session database table
| 'sess_match_ip'			= Whether to match the user's IP address when reading the session data
| 'sess_match_useragent'	= Whether to match the User Agent when reading the session data
| 'sess_time_to_update'		= how many seconds between CI refreshing Session Information
|
*/
$config['sess_cookie_name']		= 'ci_session';
$config['sess_expiration']		= 7200;
$config['sess_expire_on_close']	= FALSE;
$config['sess_encrypt_cookie']	= FALSE;
$config['sess_use_database']	= FALSE;
$config['sess_table_name']		= 'ci_sessions';
$config['sess_match_ip']		= FALSE;
$config['sess_match_useragent']	= TRUE;
$config['sess_time_to_update']	= 300;

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
| 'cookie_secure' =  Cookies will only be set if a secure HTTPS connection exists.
|
*/
$config['cookie_prefix']	= "";
$config['cookie_domain']	= "";
$config['cookie_path']		= "/";
$config['cookie_secure']	= FALSE;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
*/
$config['global_xss_filtering'] = FALSE;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
*/
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_test_name';
$config['csrf_cookie_name'] = 'csrf_cookie_name';
$config['csrf_expire'] = 7200;

/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
*/
$config['compress_output'] = FALSE;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or 'gmt'.  This pref tells the system whether to use
| your server's local time as the master 'now' reference, or convert it to
| GMT.  See the 'date helper' page of the user guide for information
| regarding date handling.
|
*/
$config['time_reference'] = 'local';


/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
*/
$config['rewrite_short_tags'] = FALSE;


/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which CodeIgniter should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips'] = '';

$config["slofs"] = 'O_Om_0ooouys%$#@!*()_++?mnbbvvcxxzzasdfgghhjkll;][[poiuuyytrrewqq';
$config["session_name"] = "inv_session";
$config["cookie_path"] = "/inventory";
$config["cookie_domain"] = "localhost";

// config database
$config['hostname'] = "localhost";
$config['username'] = "root";
$config['password'] = "root";
$config['database'] = "inventory_db";
$config['dbdriver'] = "mysql";
$config['dbprefix'] = "";
$config['pconnect'] = FALSE;
$config['db_debug'] = TRUE;
$config['cache_on'] = FALSE;
$config['cachedir'] = "";
$config['char_set'] = "utf8";
$config['dbcollat'] = "utf8_general_ci";


/* End of file config.php */
/* Location: ./application/config/config.php */
