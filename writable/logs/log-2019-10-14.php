<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-14 00:00:18 --> A non-numeric value encountered
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\Calculator.php(46): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\Calculator->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Calculator))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 00:13:34 --> syntax error, unexpected 'return' (T_RETURN), expecting ',' or ';'
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-14 01:21:12 --> Modulo by zero
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\Calculator->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Calculator))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 01:21:22 --> Modulo by zero
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\Calculator->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\Calculator))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:36:15 --> Call to a member function model() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(819): App\Controllers\CalculatorController->__construct()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:08 --> Call to a member function model() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:16 --> Call to a member function model() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:17 --> Call to a member function model() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:22 --> Call to undefined function App\Controllers\model()
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:22 --> Call to undefined function App\Controllers\model()
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:57 --> Cannot call constructor
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(819): App\Controllers\CalculatorController->__construct()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:38:57 --> Cannot call constructor
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(819): App\Controllers\CalculatorController->__construct()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:39:07 --> Cannot call constructor
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(819): App\Controllers\CalculatorController->__construct()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:39:08 --> Cannot call constructor
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(819): App\Controllers\CalculatorController->__construct()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(330): CodeIgniter\CodeIgniter->createController()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:40:05 --> Class 'App\Controllers\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:40:57 --> Class 'App\Models\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:40:57 --> Class 'App\Models\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:41:26 --> Class 'App\Controllers\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:42:53 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:42:58 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:42:58 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:43:12 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:43:29 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:43:49 --> Namespace declaration statement has to be the very first statement or after any declare call in the script
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-10-14 13:43:50 --> Namespace declaration statement has to be the very first statement or after any declare call in the script
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-10-14 13:44:52 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:44:53 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:45:46 --> Class 'App\Controllers\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:45:55 --> Class 'App\Controllers\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:45:59 --> Class 'App\Controllers\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:45:59 --> Class 'App\Controllers\Calculator' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:46:09 --> Class 'App\Controllers\CalculatorModel' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:46:21 --> Class 'App\Models\BaseController' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#4 [internal function]: spl_autoload_call('App\\Controllers...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
CRITICAL - 2019-10-14 13:46:47 --> Class 'App\Controllers\CalculatorModel' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:47:09 --> Class 'App\Controllers\CalculatorModel' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:47:36 --> Class 'App\Controllers\CalculatorModel' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:47:37 --> Class 'App\Controllers\CalculatorModel' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 13:54:09 --> syntax error, unexpected 'if' (T_IF)
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-14 13:54:16 --> syntax error, unexpected 'if' (T_IF)
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-14 13:54:17 --> syntax error, unexpected 'if' (T_IF)
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Controllers...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Controllers...')
#3 [internal function]: spl_autoload_call('App\\Controllers...')
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(798): class_exists('\\App\\Controller...', true)
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-14 14:05:05 --> Call to undefined method App\Models\CalculatorModel::insert()
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 14:06:01 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:06:31 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:08:15 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:08:16 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:08:17 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:08:29 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:08:30 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:11:10 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:13:36 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:13:50 --> syntax error, unexpected '$calculatorModel' (T_VARIABLE), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Calc...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Calc...')
#3 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(92): spl_autoload_call('App\\Models\\Calc...')
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 {main}
CRITICAL - 2019-10-14 14:14:03 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->set(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:14:15 --> Call to undefined method App\Models\CalculatorModel::insert()
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 14:17:34 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:17:36 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:18:08 --> Call to undefined function App\Models\insert()
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:19:40 --> Call to a member function save() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:19:41 --> Call to a member function save() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:19:49 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:20:53 --> Call to a member function insert() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:20:59 --> Call to a member function save() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:21:21 --> Class 'App\Models\Config\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:21:30 --> Call to a member function query() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:21:46 --> Class 'App\Models\CodeIgniter\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:21:51 --> Class 'CodeIgniter\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:22:22 --> Class 'App\Models\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:22:32 --> Class 'App\Models\ConnectionInterface' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:22:47 --> Call to undefined function App\Models\connect()
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:23:32 --> Class 'App\Models\Config\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:23:38 --> Class 'App\Models\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:25:40 --> Class 'App\Models\Config\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:25:41 --> Class 'App\Models\Config\Database' not found
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:26:48 --> Call to undefined method App\Models\CalculatorModel::findAll()
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): App\Models\CalculatorModel->insert(Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:27:16 --> Declaration of App\Models\CalculatorModel::insert($data) should be compatible with CodeIgniter\Model::insert($data = NULL, bool $returnID = true)
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Models\CalculatorModel.php(4): CodeIgniter\Debug\Exceptions->errorHandler(2, 'Declaration of ...', 'C:\\xampp\\htdocs...', 4, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(364): require_once('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\xampp\\htdocs...')
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('App\\Models\\Calc...')
#4 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('App\\Models\\Calc...')
#5 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(92): spl_autoload_call('App\\Models\\Calc...')
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#8 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-10-14 14:27:25 --> Allowed fields must be specified for model: {0}
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(1218): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Calc...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(697): CodeIgniter\Model->doProtectFields(Array)
#2 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): CodeIgniter\Model->insert(Array)
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-10-14 14:27:43 --> Allowed fields must be specified for model: {0}
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(1218): CodeIgniter\Database\Exceptions\DataException::forInvalidAllowedFields('App\\Models\\Calc...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(697): CodeIgniter\Model->doProtectFields(Array)
#2 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): CodeIgniter\Model->insert(Array)
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 {main}
CRITICAL - 2019-10-14 14:28:54 --> Unknown column 'created_at' in 'field list'
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `op...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseConnection.php(737): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `op...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseConnection.php(665): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `op...')
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseBuilder.php(2165): CodeIgniter\Database\BaseConnection->query('INSERT INTO `op...', Array, false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(717): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(93): CodeIgniter\Model->insert(Array)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#8 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-10-14 14:51:53 --> Argument 2 passed to view() must be of the type array, null given, called in C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php on line 14
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(14): view('calculator', NULL)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:51:58 --> Argument 2 passed to view() must be of the type array, null given, called in C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php on line 14
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(14): view('calculator', NULL)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:51:58 --> Argument 2 passed to view() must be of the type array, null given, called in C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php on line 14
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(14): view('calculator', NULL)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 14:57:49 --> json_decode() expects parameter 1 to be string, array given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'json_decode() e...', 'C:\\xampp\\htdocs...', 95, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(95): json_decode(Array)
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-14 15:19:18 --> Argument 1 passed to CodeIgniter\Model::findAll() must be of the type int, string given, called in C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php on line 96
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(96): CodeIgniter\Model->findAll('order by id des...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 15:36:14 --> A non-numeric value encountered
#0 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(46): CodeIgniter\Debug\Exceptions->errorHandler(2, 'A non-numeric v...', 'C:\\xampp\\htdocs...', 46, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 15:42:46 --> Column 'result' cannot be null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\MySQLi\Connection.php(329): mysqli->query('INSERT INTO `op...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseConnection.php(737): CodeIgniter\Database\MySQLi\Connection->execute('INSERT INTO `op...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseConnection.php(665): CodeIgniter\Database\BaseConnection->simpleQuery('INSERT INTO `op...')
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseBuilder.php(2165): CodeIgniter\Database\BaseConnection->query('INSERT INTO `op...', Array, false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(717): CodeIgniter\Database\BaseBuilder->insert()
#5 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(96): CodeIgniter\Model->insert(Array)
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#8 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#9 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#10 {main}
CRITICAL - 2019-10-14 16:53:15 --> rand() expects parameter 1 to be int, float given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'rand() expects ...', 'C:\\xampp\\htdocs...', 89, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(89): rand(-1.9211920199808E+19, 1.9211920199808E+19)
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-14 18:45:42 --> Call to a member function library() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:46:28 --> Call to a member function library() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:54:42 --> syntax error, unexpected 'catch' (T_CATCH), expecting function (T_FUNCTION) or const (T_CONST)
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('calculatorContr...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('calculatorContr...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 18:55:08 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:55:19 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:55:20 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:55:20 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:55:21 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:56:53 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:57:13 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 18:57:53 --> Too few arguments to function App\Controllers\CalculatorController::calcPanel(), 0 passed in C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php on line 844 and exactly 1 expected
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calcPanel()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 19:01:27 --> syntax error, unexpected ';'
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Router\Router.php(191): CodeIgniter\Router\Router->autoRoute('calculatorContr...')
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(722): CodeIgniter\Router\Router->handle('calculatorContr...')
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(295): CodeIgniter\CodeIgniter->tryToRouteIt(Object(CodeIgniter\Router\RouteCollection))
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#5 {main}
CRITICAL - 2019-10-14 19:10:15 --> Call to a member function library() on null
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->index()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 19:20:33 --> Cannot use [] for reading
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-10-14 19:30:06 --> Cannot use [] for reading
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->tests()
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#4 {main}
CRITICAL - 2019-10-14 23:47:09 --> count(): Parameter must be an array or an object that implements Countable
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(38): count(NULL)
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calc(Array)
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-14 23:47:10 --> count(): Parameter must be an array or an object that implements Countable
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'count(): Parame...', 'C:\\xampp\\htdocs...', 38, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(38): count(NULL)
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calc(Array)
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
CRITICAL - 2019-10-14 23:47:16 --> strlen() expects parameter 1 to be string, array given
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'strlen() expect...', 'C:\\xampp\\htdocs...', 35, Array)
#1 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(35): strlen(Array)
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calc(Array)
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#4 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#6 {main}
