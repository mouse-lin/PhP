<?php
set_time_limit(0);
ini_set('display_errors', 1);

	if (!defined('DS')) {
		define('DS', DIRECTORY_SEPARATOR);
	}

	if (!defined('ROOT')) {
		define('ROOT', dirname(dirname(dirname(__FILE__))));
	}

	if (!defined('APP_DIR')) {
		define('APP_DIR', basename(dirname(dirname(__FILE__))));
	}

	if (!defined('CAKE_CORE_INCLUDE_PATH')) {
		define('CAKE_CORE_INCLUDE_PATH', ROOT);
	}

if (!defined('WEBROOT_DIR')) {
	define('WEBROOT_DIR', basename(dirname(__FILE__)));
}

if (!defined('WWW_ROOT')) {
	define('WWW_ROOT', dirname(__FILE__) . DS);
}
if (!defined('CORE_PATH')) {
	define('APP_PATH', ROOT . DS . APP_DIR . DS);
	define('CORE_PATH', CAKE_CORE_INCLUDE_PATH . DS);
}
if (!include(CORE_PATH . 'cake' . DS . 'bootstrap.php')) {
	trigger_error("CakePHP core could not be found.  Check the value of CAKE_CORE_INCLUDE_PATH in APP/webroot/index.php.  It should point to the directory containing your " . DS . "cake core directory and your " . DS . "vendors root directory.", E_USER_ERROR);
}

$corePath = App::core('cake');
if (isset($corePath[0])) {
	define('TEST_CAKE_CORE_INCLUDE_PATH', rtrim($corePath[0], DS) . DS);
} else {
	define('TEST_CAKE_CORE_INCLUDE_PATH', CAKE_CORE_INCLUDE_PATH);
}

if (Configure::read('debug') < 1) {
	die(__('Debug setting does not allow access to this url.', true));
}

require_once CAKE_TESTS_LIB . 'cake_test_suite_dispatcher.php';

CakeTestSuiteDispatcher::run();
