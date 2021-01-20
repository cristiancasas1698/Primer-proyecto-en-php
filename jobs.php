<?php

//namespace
use app\Model\{Project,Job};

$project1 = new Project('titulo 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit');

$jobs = Job::all();


//arreglos anidados
$Proyects = [
  $project1
];
  
   function printElement( $jobs) {
  
  //   if ($jobs->visible == false) {
  //     return;
  //  }

    echo '<li class="work-position">'; 
    echo '<h5>'. $jobs->title .'</h5>';
    echo '<p>'. $jobs->description .'</p>';
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