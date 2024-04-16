<?php

// 328/diner/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Instantiate the F3 Base class
$f3 = Base::instance();

// Define a default route
// https://voleksiyenko.greenriverdev.com/328/diner/
$f3->route('GET /', function() {
//    echo '<h1>Hello From my Diner App</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/home-page.html');
});

$f3->route('GET /menu/breakfast', function() {
//    echo '<h1>My Breakfast Menu</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

$f3->route('GET /menu/lunch', function() {
//    echo '<h1>My Breakfast Menu</h1>';

    // Render a view page
    $view = new Template();
    echo $view->render('views/lunch-menu.html');
});


// Run Fat-Free
$f3->run();