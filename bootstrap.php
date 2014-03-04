<?php
/**
 * Bootstrap file for bringing in autloading, etc
 */
use Slim\Slim;

require("vendor/autoload.php");

$app = new Slim();

$app->get("/", function() {
    print("<h1>Hello, World!</h1>");
});

$app->run();