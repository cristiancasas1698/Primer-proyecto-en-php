<?php
namespace app\Model;
use Illuminate\Database\Eloquent\Model;

class Job extends Model {
  protected $table = 'jobs';

 
 
    public function getDurationAsString(){

        $years = floor($this->months / 12);
        $extramonths = $this->months % 12;
      
        if ($years != 0 && $extramonths !=0) {
          return "Job Duraction $years years $extramonths months";
      
        }elseif($years != 0 && $extramonths == 0){
          return "Job Duraction $years years";
      
        }elseif ($years == 0 && $extramonths != 0) {
          return "Job Duraction $extramonths months";
        }
      
      }

   
    
}

?>