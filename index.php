<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 1/11/2019
 * Time: 10:24 AM
 */

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');
require_once('model/db-functions.php');

//connect to database
$dbh = connect();
print_r($dbh);

//create and instance of the Base class
$f3 = Base::instance();
//turn on fat free error reporting
$f3->set('DEBUG',3);

//define a default route
$f3->route('GET /', function($f3){

    $students = getStudents();
    print_r($students);
    $f3->set('students',$students);

    $template = new Template();
    echo $template->render('views/all-students.html');

});

//run fat free
$f3->run();