<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will try guess the protocol, domain
| and path to your installation. However, you should always configure this
| explicitly and never rely on auto-guessing, especially in production
| environments.
|
 */
$config['base_url']	= '';

/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
 */
$config['index_page'] = "index.php";

/*
|--------------------------------------------------------------------------
| URI PROTOCOL
|--------------------------------------------------------------------------
|
| This item determines which server global should be used to retrieve the
| URI string.  The default setting of 'REQUEST_URI' works for most servers.
| If your links do not seem to work, try one of the other delicious flavors:
|
| 'AUTO'		    auto detects
| 'CLI' or 'argv'	Uses $_SERVER['argv'] (for php-cli only) // CI3
| 'REQUEST_URI'		Uses $_SERVER['REQUEST_URI']
| 'QUERY_STRING'	Uses $_SERVER['QUERY_STRING']
| 'PATH_INFO'		Uses $_SERVER['PATH_INFO']
|
| WARNING: If you set this to 'PATH_INFO', URIs will always be URL-decoded!
 */
$config['uri_protocol']	= 'AUTO';

/*
|--------------------------------------------------------------------------
| URL suffix
|--------------------------------------------------------------------------
|
| This option allows you to add a suffix to all URLs generated by CodeIgniter.
| For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/urls.html
 */
$config['url_suffix'] = '';

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which set of language files should be used. Make sure
| there is an available translation if you intend to use something other
| than english.
|
*/
$config['language']	= 'english';

/*
|--------------------------------------------------------------------------
| Default Character Set
|--------------------------------------------------------------------------
|
| This determines which character set is used by default in various methods
| that require a character set to be provided.
|
| See http://php.net/htmlspecialchars for a list of supported charsets.
|
*/
$config['charset'] = 'UTF-8';

/*
|--------------------------------------------------------------------------
| Enable/Disable System Hooks
|--------------------------------------------------------------------------
|
| If you would like to use the 'hooks' feature you must enable it by
| setting this variable to TRUE (boolean).  See the user guide for details.
|
*/
$config['enable_hooks'] = true;

/*
|--------------------------------------------------------------------------
| Class Extension Prefix
|--------------------------------------------------------------------------
|
| This item allows you to set the filename/classname prefix when extending
| native libraries.  For more information please see the user guide:
|
| http://codeigniter.com/user_guide/general/core_classes.html
| http://codeigniter.com/user_guide/general/creating_libraries.html
|
 */
$config['subclass_prefix'] = 'MY_';

/*
|--------------------------------------------------------------------------
| Composer auto-loading
|--------------------------------------------------------------------------
|
| Enabling this setting will tell CodeIgniter to look for a Composer
| package auto-loader script in application/vendor/autoload.php.
|
|	$config['composer_autoload'] = TRUE;
|
| Or if you have your vendor/ directory located somewhere else, you
| can opt to set a specific path as well:
|
|	$config['composer_autoload'] = '/path/to/vendor/autoload.php';
|
| For more information about Composer, please visit http://getcomposer.org/
|
| Note: This will NOT disable or override the CodeIgniter-specific
|	autoloading (application/config/autoload.php)
 */
$config['composer_autoload'] = false;
// $config['composer_autoload'] = '../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Allowed URL Characters
|--------------------------------------------------------------------------
|
| This lets you specify which characters are permitted within your URLs.
| When someone tries to submit a URL with disallowed characters they will
| get a warning message.
|
| As a security measure you are STRONGLY encouraged to restrict URLs to
| as few characters as possible.  By default only these are allowed: a-z 0-9~%.:_-
|
| Leave blank to allow all characters -- but only if you are insane.
|
| The configured value is actually a regular expression character group
| and it will be executed as: ! preg_match('/^[<permitted_uri_chars>]+$/i
|
| DO NOT CHANGE THIS UNLESS YOU FULLY UNDERSTAND THE REPERCUSSIONS!!
|
 */
$config['permitted_uri_chars'] = 'a-z 0-9~%.:&_\-';

/*
|--------------------------------------------------------------------------
| Enable Query Strings
|--------------------------------------------------------------------------
|
| By default CodeIgniter uses search-engine friendly segment based URLs:
| example.com/who/what/where/
|
| By default CodeIgniter enables access to the $_GET array.  If for some
| reason you would like to disable it, set 'allow_get_array' to FALSE.
|
| You can optionally enable standard query string based URLs:
| example.com?who=me&what=something&where=here
|
| Options are: TRUE or FALSE (boolean)
|
| The other items let you set the query string 'words' that will
| invoke your controllers and its functions:
| example.com/index.php?c=controller&m=function
|
| Please note that some of the helpers won't work as expected when
| this feature is enabled, since CodeIgniter is designed primarily to
| use segment based URLs.
|
 */
$config['allow_get_array']      = true;
$config['enable_query_strings'] = false;
$config['controller_trigger']	= 'c';
$config['function_trigger']		= 'm';
$config['directory_trigger'] = 'd';

/*
|--------------------------------------------------------------------------
| Error Logging Threshold
|--------------------------------------------------------------------------
|
| You can enable error logging by setting a threshold over zero. The
| threshold determines what gets logged. Threshold options are:
|
|	0 = Disables logging, Error logging TURNED OFF
|	1 = Error Messages (including PHP errors)
|	2 = Debug Messages
|	3 = Informational Messages
|	4 = All Messages
|
| You can also pass an array with threshold levels to show individual error types
|
| 	array(2) = Debug Messages, without Error Messages
|
| For a live site you'll usually only enable Errors (1) to be logged otherwise
| your log files will fill up very fast.
|
 */
$config['log_threshold'] = 0;

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/logs/ directory. Use a full server path with trailing slash.
|
 */
$config['log_path'] = APPPATH .'logs/';

/*
|--------------------------------------------------------------------------
| Log File Extension (CI3)
|--------------------------------------------------------------------------
|
| The default filename extension for log files. The default 'php' allows for
| protecting the log files via basic scripting, when they are to be stored
| under a publicly accessible directory.
|
| Note: Leaving it blank will default to 'php'.
|
*/
$config['log_file_extension'] = '';

/*
|--------------------------------------------------------------------------
| Log File Permissions (CI3)
|--------------------------------------------------------------------------
|
| The file system permissions to be applied on newly created log files.
|
| IMPORTANT: This MUST be an integer (no quotes) and you MUST use octal
|            integer notation (i.e. 0700, 0644, etc.)
*/
$config['log_file_permissions'] = 0644;

/*
|--------------------------------------------------------------------------
| Date Format for Logs
|--------------------------------------------------------------------------
|
| Each item that is logged has an associated date. You can use PHP date
| codes to set your own date formatting
|
 */
$config['log_date_format'] = 'Y-m-d H:i:s';

/*
|--------------------------------------------------------------------------
| Error Views Directory Path (CI3)
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/views/errors/ directory.  Use a full server path with trailing slash.
|
*/
$config['error_views_path'] = '';

/*
|--------------------------------------------------------------------------
| Cache Directory Path
|--------------------------------------------------------------------------
|
| Leave this BLANK unless you would like to set something other than the default
| application/cache/ directory.  Use a full server path with trailing slash.
|
 */
$config['cache_path'] = APPPATH . 'cache/';

/*
|--------------------------------------------------------------------------
| Cache Include Query String (CI3)
|--------------------------------------------------------------------------
|
| Whether to take the URL query string into consideration when generating
| output cache files. Valid options are:
|
|	FALSE      = Disabled
|	TRUE       = Enabled, take all query parameters into account.
|	             Please be aware that this may result in numerous cache
|	             files generated for the same page over and over again.
|	array('q') = Enabled, but only take into account the specified list
|	             of query parameters.
|
 */
$config['cache_query_string'] = false;

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class, you must set an encryption key.
| See the user guide for more info.
|
| http://codeigniter.com/user_guide/libraries/encryption.html
|
 */
$config['encryption_key'] = "257256640007b3c02f82165196d9414d";

/*
|--------------------------------------------------------------------------
| Session Variables
|--------------------------------------------------------------------------
| (CI2)
| 'sess_cookie_name'     = the name you want for the cookie
| 'sess_expiration'      = the number of SECONDS you want the session to last.
|   by default sessions last 7200 seconds (two hours).  Set to zero for no expiration.
| 'sess_expire_on_close' = Whether to cause the session to expire automatically
|   when the browser window is closed
| 'sess_encrypt_cookie'  = Whether to encrypt the cookie
| 'sess_use_database'    = Whether to save the session data to a database
| 'sess_table_name'      = The name of the session database table
| 'sess_match_ip'        = Whether to match the user's IP address when reading the session data
| 'sess_match_useragent' = Whether to match the User Agent when reading the session data
| 'sess_time_to_update'  = how many seconds between CI refreshing Session Information
|------------------------------------------------------------------------------
| (CI3)
|
| 'sess_driver'
|
|	The storage driver to use: files, database, redis, memcached
|
| 'sess_cookie_name'
|
|	The session cookie name, must contain only [0-9a-z_-] characters
|
| 'sess_expiration'
|
|	The number of SECONDS you want the session to last.
|	Setting to 0 (zero) means expire when the browser is closed.
|
| 'sess_save_path'
|
|	The location to save sessions to, driver dependent.
|
|	For the 'files' driver, it's a path to a writable directory.
|   WARNING: Only absolute paths are supported!
|
|	For the 'database' driver, it's a table name.
|	Please read up the manual for the format with other session drivers.
|
|	IMPORTANT: You are REQUIRED to set a valid save path!
|
|   Bonfire note: If you use a different database table name in 'sess_save_path', update
|   /bonfire/migrations/043_Add_ci3_sessions.php
|   accordingly or create the table manually.
|
| 'sess_match_ip'
|
|	Whether to match the user's IP address when reading the session data.
|
| 'sess_time_to_update'
|
|	How many seconds between CI regenerating the session ID.
|
| 'sess_regenerate_destroy'
|
|	Whether to destroy session data associated with the old session ID
|	when auto-regenerating the session ID. When set to FALSE, the data
|	will be later deleted by the garbage collector.
|
| Other session cookie settings are shared with the rest of the application,
| except for 'cookie_prefix' and 'cookie_httponly', which are ignored here.
|
 */
// Shared (CI 2 and 3) Session Variables
$config['sess_cookie_name']		= 'bf_session';
$config['sess_expiration']		= 7200;
$config['sess_time_to_update'] = 300;
$config['sess_match_ip'] = false;

// CI 2 Session Variables
$config['sess_expire_on_close'] = false;
$config['sess_encrypt_cookie']  = false;
$config['sess_use_database']    = false;
$config['sess_table_name']		= 'sessions';
$config['sess_match_useragent'] = true; // May duplicate sessions for Safari users when true.

// CI 3 Session Variables
$config['sess_driver'] = 'database';
$config['sess_regenerate_destroy'] = false;
$config['sess_save_path'] = 'ci3_sessions';

/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix'   = Set a cookie name prefix if you need to avoid collisions
| 'cookie_domain'   = Set to .your-domain.com for site-wide cookies
| 'cookie_path'     = Typically will be a forward slash
| 'cookie_secure'   = Cookie will only be set if a secure HTTPS connection exists.
| 'cookie_httponly' = Cookie will only be accessible via HTTP(S) (no javascript) (CI3)
|
| Note: These settings (with the exception of 'cookie_prefix' and
|       'cookie_httponly') will also affect sessions.
|
 */
$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']        = false; //true;
$config['cookie_httponly']      = false;

/*
|--------------------------------------------------------------------------
| Standardize newlines (CI3)
|--------------------------------------------------------------------------
|
| Determines whether to standardize newline characters in input data,
| meaning to replace \r\n, \r, \n occurrences with the PHP_EOL value.
|
| This is particularly useful for portability between UNIX-based OSes,
| (usually \n) and Windows (\r\n).
|
*/
$config['standardize_newlines'] = false;

/*
|--------------------------------------------------------------------------
| Global XSS Filtering
|--------------------------------------------------------------------------
|
| Determines whether the XSS filter is always active when GET, POST or
| COOKIE data is encountered
|
| WARNING: This feature is DEPRECATED in CI3 and currently available only
|          for backwards compatibility purposes!
|
 */
$config['global_xss_filtering'] = false;

/*
|--------------------------------------------------------------------------
| Cross Site Request Forgery
|--------------------------------------------------------------------------
| Enables a CSRF cookie token to be set. When set to TRUE, token will be
| checked on a submitted form. If you are accepting user data, it is strongly
| recommended CSRF protection be enabled.
|
| 'csrf_token_name' = The token name
| 'csrf_cookie_name' = The cookie name
| 'csrf_expire' = The number in seconds the token should expire.
| 'csrf_regenerate' = Regenerate token on every submission (CI3)
| 'csrf_exclude_uris' = Array of URIs which ignore CSRF checks (CI3)
 */
$config['csrf_protection']      =   true;
$config['csrf_token_name']      =   'my_token_nam'; //'ci_csrf_token';
$config['csrf_cookie_name']     =   'my_token_nam'; //'ci_csrf_token';
$config['csrf_expire']          =   7200;
$config['csrf_regenerate']      =   true;
$config['csrf_exclude_uris']    =   array   (
                                                'admin/settings/series_and_numbers/create',
                                                'admin/settings/series_and_numbers/report/report',
                                                'admin/content/editor_of_diplomas/form',
                                                'admin/content/editor_of_diplomas/field/ajax',
                                                'admin/content/university_graduates/create',
                                                'admin/content/university_graduates/edit',
												'admin/content/university_graduates',
                                                'admin/content/university_graduates/report',
                                                'admin/content/university_graduates/index/search',
                                                'admin/content/university_graduates/import/inregistrare'
                                            );
/*
|--------------------------------------------------------------------------
| Output Compression
|--------------------------------------------------------------------------
|
| Enables Gzip output compression for faster page loads.  When enabled,
| the output class will test whether your server supports Gzip.
| Even if it does, however, not all browsers support compression
| so enable only if you are reasonably sure your visitors can handle it.
|
| Only used if zlib.output_compression is turned off in your php.ini.
| Please do not use it together with httpd-level output compression.
|
| VERY IMPORTANT:  If you are getting a blank page when compression is enabled it
| means you are prematurely outputting something to your browser. It could
| even be a line of whitespace at the end of one of your scripts.  For
| compression to work, nothing can be sent before the output buffer is called
| by the output class.  Do not 'echo' any values with compression enabled.
|
 */
$config['compress_output'] = false;

/*
|--------------------------------------------------------------------------
| Master Time Reference
|--------------------------------------------------------------------------
|
| Options are 'local' or any PHP supported timezone. This preference tells
| the system whether to use your server's local time as the master 'now'
| reference, or convert it to the configured one timezone. See the 'date
| helper' page of the user guide for information regarding date handling.
|
 */
$config['time_reference'] = 'utc';

/*
|--------------------------------------------------------------------------
| Rewrite PHP Short Tags
|--------------------------------------------------------------------------
|
| If your PHP installation does not have short tag support enabled CI
| can rewrite the tags on-the-fly, enabling you to utilize that syntax
| in your view files.  Options are TRUE or FALSE (boolean)
|
| Note: You need to have eval() enabled for this to work.
|
 */
$config['rewrite_short_tags'] = false;

/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy
| IP addresses from which CodeIgniter should trust headers such as
| HTTP_X_FORWARDED_FOR and HTTP_CLIENT_IP in order to properly identify
| the visitor's IP address.
|
| You can use both an array or a comma-separated list of proxy addresses,
| as well as specifying whole subnets. Here are a few examples:
|
| Comma-separated:	'10.0.1.200,192.168.5.0/24'
| Array:		array('10.0.1.200', '192.168.5.0/24')
 */
$config['proxy_ips'] = '';
////////////////////////////////////////////////////////////////////////////////
$config['UniTBv'] = array( 'LDAP' => array( 'Server'    =>  '193.254.230.51',
                                            'MyPort'    =>  '389',
                                            'MngrDN'    =>  'cn=apps,ou=Agents,dc=unitbv,dc=ro',
                                            'PassDN'    =>  '3#flpSdfG449sQ81',
                                            'MyTree'    =>  "ou=People,dc=unitbv,dc=ro",
                                            'MailBF'    =>  '', 
                                            'PassBF'    =>  'lidia2011', 
                                          ) );
////////////////////////////////////////////////////////////////////////////////
$config['diplomas_design_type']             =   array( "Licenta_L1_2011", "Inginer_L1_2011", "Lic_C1+C2_L1_2011", "Master_L1_2011", "PhD_L1_2011", "Conversie_L1_2011", "CompDFC_L1_2011", "DPPD_L1_2011", "GradDid_L1_2011", "AnPreg_L1_2011", "Atestat_preuniv_L1_2011", "Licenta_L288_2004", "Lic_C1+C2_L288_2004", "Master_L288_2004", "DPPD_L288_2004", "Licenta_L84_1995", "Inginer_L84_1995", "Absolv_L84_1995", "Master_L84_1995", "PhD_L84_1995", "AnPreg_L84_1995", "DPPD_L84_1995", "Certif_SLD_L84_1995", "Certif_SSD_L84_1995", );
$config['diplomas_design_form']             =   array( "A3", "A3-L", "A4", "A4-L" );
$config['diplomas_design_field_type']       =   array( "alfanumeric-text", "alfanumeric-html", "numeric-integer", "numeric-decimal", ); //"datetime" 
$config['diplomas_design_field_default']    =   array(
                                                        'NrInregistrare'                            => array( 'type' => 'numeric-integer',  'required' => true,     'text' => 'Nr. Înregistrare' ),
                                                        'Graduate_001_NrCrediteProgram'             => array( 'type' => 'numeric-integer',  'required' => true,     'text' => 'Nr. Credite Program' ),
                                                        'Graduate_002_SesiuneExamenAbsolvire'       => array( 'type' => 'alfanumeric-text', 'required' => true,     'text' => 'Sesiune Examen Absolvire' ),
                                                        'Graduate_003_AnExamenAbsolvire'            => array( 'type' => 'alfanumeric-text', 'required' => true,     'text' => 'An Examen Absolvire' ),
                                                        'Graduate_004_DenumireProba1'               => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Proba [1]' ),
                                                        'Graduate_005_NrCrediteProba1'              => array( 'type' => 'numeric-integer',  'required' => false,    'text' => 'Nr. Credite Proba [1]' ),
                                                        'Graduate_006_Nota1'                        => array( 'type' => 'numeric-decimal',  'required' => false,    'text' => 'Nota [1]' ),
                                                        'Graduate_007_NotaInCifreSiLitere1'         => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Nota in Cifre si Litere [1]' ),
                                                        'Graduate_008_DenumireProba2'               => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Proba [2]' ),
                                                        'Graduate_009_NrCrediteProba2'              => array( 'type' => 'numeric-integer',  'required' => false,    'text' => 'Nr. Credite Proba [2]' ),
                                                        'Graduate_010_Nota2'                        => array( 'type' => 'numeric-decimal',  'required' => false,    'text' => 'Nota [2]' ),
                                                        'Graduate_011_NotaInCifreSiLitere2'         => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Nota in Cifre si Litere [2]' ),
                                                        'Graduate_012_NumeIntreg'                   => array( 'type' => 'alfanumeric-text', 'required' => true,     'text' => 'Nume Intreg' ),
                                                        'Graduate_013_DataNastere'                  => array( 'type' => 'datetime',         'required' => false,    'text' => 'Data Nastere' ),
                                                        'Graduate_014_ZiNastere'                    => array( 'type' => 'numeric-integer',  'required' => false,    'text' => 'Zi Nastere' ),
                                                        'Graduate_015_LunaNastere'                  => array( 'type' => 'numeric-integer',  'required' => false,    'text' => 'Luna Nastere' ),
                                                        'Graduate_016_AnNastere'                    => array( 'type' => 'numeric-integer',  'required' => false,    'text' => 'An Nastere' ),
                                                        'Graduate_017_LunaNastereInLitere'          => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Luna Nastere in Litere' ),
                                                        'Graduate_018_MedieFinalaAbsolvire'         => array( 'type' => 'numeric-decimal',  'required' => false,    'text' => 'Medie Finala Absolvire' ),
                                                        'Graduate_019_DenumireTaraNastere'          => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Tara Nastere' ),
                                                        'Graduate_020_DenumireLocalitateNastere'    => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Localitate Nastere' ),
                                                        'Graduate_021_DenumireJudetNastere'         => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Judet Nastere' ),
                                                        'Graduate_022_FormulaAdresare'              => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Formula de Adresare' ),
                                                        'Graduate_024_FormulaAdresareArticulat'     => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Formula de Adresare [articulat]' ),
                                                        'Graduate_025_FormulaAdresareSufixF'         => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Formula de Adresare F [sufix]' ),
                                                        'Graduate_026_DenumireDomeniu'              => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Domeniu' ),
                                                        'Graduate_027_DenumireSpecializare'         => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Specializare' ),
                                                        'Graduate_028_DenumireProgramDeStudii'      => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Denumire Program de Studii' ),
                                                        'Graduate_029_Universitate'                 => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Universitate' ),
                                                        'Graduate_030_UniversitateArticulat'        => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Universitate [articulat]' ),
                                                        'Graduate_031_Facultate'                    => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Facultate' ),
                                                        'Graduate_032_FormaInvatamant'              => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Forma de Invatamant' ),
                                                        'Graduate_033_CicluDeStudii'                => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Ciclu de Studii' ),
                                                        'Graduate_034_LimbaPredare'                 => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Limba de Predare' ),
                                                        'Graduate_035_NumeRector'                   => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Nume Rector' ),
                                                        'Graduate_036_NumeSecretarSefUniversitate'  => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Nume Secretar Sef Universitate' ),
                                                        'Graduate_037_NumeDecan'                    => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Nume Decan' ),
                                                        'Graduate_038_NumeSecretarSefFacultate'     => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Nume Secretar Sef Facultate' ),
    
                                                        'Graduate_039_DurataStudiilor'              => array( 'type' => 'numeric-integer',  'required' => false,    'text' => 'Durata Studiilor' ),
                                                        'Graduate_040_FacultateArticulat'           => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Facultate [articulat]' ),
                                                        'Graduate_041_MedieFinalaAbsolvireCifre'    => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Medie Finala Absolvire [cifre]' ),
                                                        'Graduate_042_TitlulObtinut'                => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Titlul Obținut' ),
														'Graduate_043_FormulaAdresareSufixM'        => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Formula de Adresare M [sufix]' ),
														'Graduate_044_PrenumeTata'        			=> array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Prenume Tata' ),
														'Graduate_045_PrenumeMama'        			=> array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Prenume Mama' ),
														'Graduate_046_CNP'        					=> array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'CNP' ),
														'Graduate_047_NrCrediteExamenFinal'         => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Numar Credite Examen Final' ),
														'Graduate_048_MedieExamenFinal'        		=> array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Medie Examen Final' ),
														'Graduate_049_MedieExamenFinalInCifreSiLitere'  => array( 'type' => 'alfanumeric-text', 'required' => false,    'text' => 'Medie Examen Final In Cifre Si Litere' ),
                                                    );
$config['diploma_img_max_size_in_MB'] = 10; // MB
$config['diploma_img_max_width___PX'] = 3000; // PX
$config['diploma_img_max_height__PX'] = 2000; // PX
$config['diploma_img_resolution_DPI'] = 72; // DPI
$config['diploma_img_upload_folder_image'] = 'uploads/'; // DPI
$config['diploma_img_upload_folder_thumb'] = 'uploads/thumbs/'; // DPI