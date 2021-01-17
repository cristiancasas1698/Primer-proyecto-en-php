<?php

//namespace
require 'library1/Project.php';
use App\Model\{Job,project,Printable};

require 'app/Model/Job.php';
require 'app/Model/Project.php';
require_once 'app/Model/Printable.php';


$jobs1 = new job('PHP developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit');
$jobs1 -> months = 13;

$jobs2 = new job('Python developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit');
$jobs2 -> months = 12;

$jobs3 = new job('Backend developer','Lorem ipsum dolor sit amet, consectetur adipiscing elit');
$jobs3 -> months = 15;

$project1 = new Project('titulo 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit');


//arreglos anidados
$jobs = [
    $jobs1,
    $jobs2,
    $jobs3
  ];

$Proyects = [
  $project1
];

  
   function printElement(printable $jobs) {
  
    if ($jobs->visible == false) {
      return;
   }

    echo '<li class="work-position">'; 
    echo '<h5>'. $jobs->getTitle() .'</h5>';
    echo '<p>'. $jobs->getDescription() .'</p>';
    echo '<p> experience: '. $jobs->getDurationAsString() .'</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
   }
   //var_dump($jobs);

?>