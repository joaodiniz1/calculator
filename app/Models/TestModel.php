<?php
use \CodeIgniter\Database\ConnectionInterface;
namespace App\Models;
class TestModel extends \CodeIgniter\Model{
    public function unit($result,$expected){
        if ($result==$expected){
           return 1;
        }else{
            return 0;
        }
    }

    public function report($results){
        $report['Tests'] = count($results);
        $report['Assertions'] = 0;
        $report['Errors'] = 0;
        foreach ($results as $r){
            if ($r==1){
                $report['Assertions']++;
            }else{
                $report['Errors']++;
            }
        }
        return $report;
    }
      
       
}