<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-10-15 00:25:31 --> Access denied for user '****'@'localhost' (using password: YES)
#0 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseConnection.php(376): CodeIgniter\Database\MySQLi\Connection->connect(false)
#1 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseConnection.php(642): CodeIgniter\Database\BaseConnection->initialize()
#2 C:\xampp\htdocs\joaodiniz1\calculator\system\Database\BaseBuilder.php(2165): CodeIgniter\Database\BaseConnection->query('INSERT INTO `op...', Array, false)
#3 C:\xampp\htdocs\joaodiniz1\calculator\system\Model.php(717): CodeIgniter\Database\BaseBuilder->insert()
#4 C:\xampp\htdocs\joaodiniz1\calculator\app\Controllers\CalculatorController.php(130): CodeIgniter\Model->insert(Array)
#5 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(844): App\Controllers\CalculatorController->calc('10+5')
#6 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(App\Controllers\CalculatorController))
#7 C:\xampp\htdocs\joaodiniz1\calculator\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\xampp\htdocs\joaodiniz1\calculator\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 {main}
