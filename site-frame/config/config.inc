<?php
// SITE_ROOT contains the full path to the folder
define('SITE_ROOT', dirname(dirname(__FILE__)));
// SITE_ROOT contains the full path to the folder
define('INC_DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);
//Website local date time
date_default_timezone_set('Europe/Athens');
//user language
define('USER_LANG',substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
define('SITE_NAME','DoSoft');
define('SITE_HOST',$_SERVER['SERVER_NAME']);
define('DS_SALT','INFO_CM');
define('DS_HEX_SYMMETRIC','c7098');
define("COOKIE_TIME_OUT", 1);
#define('DOLANG',array('en','fr','el'));
// Database connectivity setup
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'dosoft');
define('DB_PASSWORD', 'VXExBCWSK');
define('DB_DATABASE','idosoft');
define('DB_DRIVER','Pdo_Mysql');
define('VIRTUAL_LOCATION','/');
define('HTTP_SERVER_PORT','80');
define('HTTPSERVERSTATUS', 200);
define('W_3_DOT', 'www.');
define('SECTIONSDIR','sections');
define('MAIL_HEADER',INC_DOC_ROOT.'/'.SECTIONSDIR.'/mail/header.inc');
define('MAIL_FOOTER',INC_DOC_ROOT.'/'.SECTIONSDIR.'/mail/footer.inc');
define('MAIL_PDF_HEADER',INC_DOC_ROOT.'/'.SECTIONSDIR.'/mail/pdf_header.inc');
define('MAIL_PDF_FOOTER',INC_DOC_ROOT.'/'.SECTIONSDIR.'/mail/pdf_footer.inc');
define('MAIL_PDF_BODY',INC_DOC_ROOT.'/'.SECTIONSDIR.'/mail/pdf_body.inc');
define('PDF_DIR','pdf/');
define('PDF_EXT','.pdf');
define('LOCAL_DIR','/data/local/');
define('USER_FILE_DIR',INC_DOC_ROOT.'/data/serviceFile/');
define('LOCAL_FILE',SITE_ROOT.LOCAL_DIR.'local.csv');
define('BODY','<body id="body" page="Index">');

// These should be true while developing the web site
define('IS_WARNING_FATAL', true);
define('DEBUGGING', true);
// The error types to be reported
define('ERROR_TYPES', E_ALL);
// Settings about mailing the error messages to admin
define('SEND_ERROR_MAIL', false);
define('SENDMAIL_FROM', 'cl'); #o
define('ADMIN_ERROR_MAIL', SENDMAIL_FROM);
define('RECEIVE_FROM' ,SENDMAIL_FROM);
define('PHONE_FROM','(0030) 210 86 70 232');
define('INFOPASS' ,'tGm59YxRZrf3');
ini_set('sendmail_from', SENDMAIL_FROM);
//Admin web emails
define('ADMINEMAIL','xxx@ghost');

// By default we don't log errors to a file

define('LOG_ERRORS', false);
define('LOG_ERRORS_FILE', SITE_ROOT.'/errors_log.txt'); // Windows

//define('LOG_ERRORS_FILE', SITE_ROOT.'/errors.log'); // Linux
/* Generic error message to be displayed instead of debug info
(when DEBUGGING is false) */
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>'.SITE_NAME.'!</h1>');