<?php
/**
 * The main test-cases for the Authe class.
 */
use Tester\Assert;
use Authe\Authe;

// Load the bootstrap
require(__DIR__ . "/../bootstrap.php");

function testLoginAndGetToken() {
    $Authe = new Authe();

    $username = "testusername";
    $password = "testpassword";
    
    $loginResult = $Authe->loginAndGetToken($username, $password);
    
    //Assert::same($loginResult, "test");
}


// now run the tests
testLoginAndGetToken();