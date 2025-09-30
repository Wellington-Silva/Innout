<?php 

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.UTF-8', 'portuguese');

// // Folders
// define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
// define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views')); 
// define('TEMPLATES_PATH', realpath(dirname(__FILE__) . '/../views/templates'));
// define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
// define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));
// define('BASE_URL', '/innout/public');

$srcPath = dirname(__FILE__, 2);

// Folders
define('MODEL_PATH', $srcPath . '/models');
define('VIEW_PATH', $srcPath . '/views');
define('TEMPLATES_PATH', $srcPath . '/views/templates');
define('CONTROLLER_PATH', $srcPath . '/controllers');
define('EXCEPTION_PATH', $srcPath . '/exceptions');
define('BASE_URL', '/innout/public');

// Files
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));