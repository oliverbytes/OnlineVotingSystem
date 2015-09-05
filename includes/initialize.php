<?php 

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('SITE_ROOT') ? null : define('SITE_ROOT', DS.'xampp'.DS.'htdocs'.DS.'Voting System v2');
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');

// HELPERS
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."functions.php");

// CORE PHPS
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
require_once(LIB_PATH.DS."session.php");

// OBJECT PHPS
require_once(LIB_PATH.DS."user.php");
require_once(LIB_PATH.DS."nominee.php");
require_once(LIB_PATH.DS."vote.php");
require_once(LIB_PATH.DS."comment.php");
require_once(LIB_PATH.DS."pagination.php");
?>
