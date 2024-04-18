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

    // Render a view page
    $view = new Template();
    echo $view->render('views/breakfast-menu.html');
});

$f3->route('GET /menu/lunch', function() {

    // Render a view page
    $view = new Template();
    echo $view->render('views/lunch-menu.html');
});

$f3->route('GET|POST /order1', function($f3) {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Get the data from the post array
        $food = $_POST['food'];
        $meal = $_POST['meal'];

        if (!empty($food) && !empty($meal)) {

            // Add the data to the session array
            $f3 -> set('SESSION.food', $food);
            $f3 -> set('SESSION.meal', $meal);

            // Send the user to the next form
            $f3 -> reroute('order2');
        } else {
            // temporary
            echo "<p>Validation Errors</p>";
        }
    }
    // Render a view page
    $view = new Template();
    echo $view->render('views/order1.html');
});

$f3->route('GET /order2', function($f3) {

    var_dump($f3 -> get('SESSION'));

    // Render a view page
    $view = new Template();
    echo $view->render('views/order2.html');
});


// Run Fat-Free
$f3->run();