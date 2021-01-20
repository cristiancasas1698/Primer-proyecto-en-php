<?php
require_once 'vendor\autoload.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use app\Model\Job;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$job = new Job();

if (!empty($_POST)) {
    $job = new Job();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->save();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
    <title>Add Job</title>
</head>
<body>
    <h1>Add Job <span style='font-size:30px;'>&#9989;</span></h1>
    <form action="addJob.php" method="post">
        <label for="">Title:</label>
        <input type="text" name="title"><br>
        <label for="">Desciption:</label>
        <input type="text"name="description"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>