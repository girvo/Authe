<?php

use Tester\Assert;
use Authe\Authe;

// Load the bootstrap
require(__DIR__ . "/../bootstrap.php");

function testCheckAndDoLogin() {
    $Authe = new Authe();

    $username = "testusername";
    $password = "testpassword";
    
    $loginResult = $Authe->checkAndDoLogin($username, $password);
    
    Assert::same($loginResult, "test");
}


// now run the tests
testCheckAndDoLogin();