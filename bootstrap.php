<?php
/**
 * Bootstrap file for bringing in autloading, etc
 */

require("vendor/autoload.php");

use Slim\Slim;

$app = new Slim();

$app->get("/", function() {
    print("<h1>Hello, World!</h1>");
});

$app->run();