<?php
namespace app\Model;
require_once 'BaseElement.php';

class Job extends BaseElement {

    public function __construct($title,$description){
        $newTitle = 'Job: '.$title;
        $this->title = $newTitle;

        //parent::__construct($newTitle,$description);
       
    } 

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