<?php
// turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// define a default route
$f3->route('GET /', function($f3){
    //echo '<h1>week 5</h1>';

    // create some variables in the hive
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('password'));
    $f3->set('title', 'Working wih Templates');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);

   //desserts array
    $f3->set('desserts', array('chocolate'=>'Chocolate Mousse', 'vanilla'=>'Vanilla Custard', 'strawberry'=>'Strawberry Shortcake'));

    $view = new Template();
    echo $view->render('views/info.html');
});

// run fat free
$f3->run();
