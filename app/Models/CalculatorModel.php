<?php
use \CodeIgniter\Database\ConnectionInterface;
namespace App\Models;
class CalculatorModel extends \CodeIgniter\Model{
        protected $table      = 'operations';
        protected $primaryKey = 'id';
        protected $useTimestamps = false;
        protected $allowedFields = ['ip', 'operation', 'result','bonus'];
       
}