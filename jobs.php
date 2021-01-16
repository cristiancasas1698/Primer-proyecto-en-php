<?php

//arreglos anidados
$jobs = [
    [
      'title' => 'PHP developer',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      'visible' => true,
      'months' => 13
    ],
    [
      'title' => 'Python developer',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      'visible' => true,
      'months' => 12
    ],
    [
      'title' => 'Backend developer',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      'visible' => true,
      'months' => 15
    ],
    [
      'title' => 'Node developer',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      'visible' => true,
      'months' => 6
    ],
    [
      'title' => 'Frontend developer',
      'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
      'visible' => false,
      'months' => 3
    ]
  ];

  // funcion para verificar los años/meses de experiencia
function getDuration($moths){
    $years = floor($moths / 12);
    $extramoths = $moths % 12;
  
    if ($years != 0 && $extramoths !=0) {
      return "$years years $extramoths moths";
  
    }elseif($years != 0 && $extramoths == 0){
      return "$years years";
  
    }elseif ($years == 0 && $extramoths != 0) {
      return "$extramoths moths";
    }
  
  }
  
   function viewjobs($jobs) {
  
    if ($jobs['visible'] == false) {
      return;
   }
  
    echo '<li class="work-position">'; 
    echo '<h5>'. $jobs['title'] .'</h5>';
    echo '<p>'. $jobs['description'] .'</p>';
    echo '<p> experience: '. getDuration($jobs['months']) .'</p>';
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