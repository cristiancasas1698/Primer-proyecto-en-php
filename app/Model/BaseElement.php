<?php
namespace app\Model;
require_once 'Printable.php';

class BaseElement implements Printable{
    public $title;
    public $description;
    public $visible = true;
    public $months;

    //constructor
    public function __construct($title,$description){
        $this->setTitle($title);
        $this->description = $description;
       
    }

   /********  metodos set y get para la clase $job *********/

    public function setTitle($title){
        if ($title == '') {
            $this->title = 'N/A';
        }else {
            $this->title = $title;
        }
        
    }

    public function getTitle(){
        return $this->title;
    }

    public function getDurationAsString(){
        $years = floor($this->months / 12);
        $extramonths = $this->months % 12;
      
        if ($years != 0 && $extramonths !=0) {
          return "$years years $extramonths months";
      
        }elseif($years != 0 && $extramonths == 0){
          return "$years years";
      
        }elseif ($years == 0 && $extramonths != 0) {
          return "$extramonths months";
        }
      
      }
      public function getDescription(){
        return $this->description;
      }
}

?>