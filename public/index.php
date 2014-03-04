<?php
/**
 * The front controller for Authe
 * For testing and as a basic implementation
 */
use Slim\Slim; 

require("../bootstrap.php");

$app = new Slim();

$app->get("/", function() {
    print("<h1>Hello, World!</h1>");
});

$app->get("/login", function() {
    print("Login page goes here");
});

$app->get("/api/user/", function() {

});

$app->post("/api/login/", function() use ($app) {

});

/**
 * A temporary hack until I write a better API
 */
$app->get("/api/logout/", function() {

});

$app->run();