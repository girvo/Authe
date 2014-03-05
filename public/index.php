<?php
/**
 * The front controller for Authe
 * For testing and as a basic implementation
 */
use Slim\Slim; 
use Authe\Authe;

require("../bootstrap.php");

$app = new Slim();

$app->get("/", function() {
    print <<<HTML
    <html>
        <head><title>Hello, World</title></head>
        <body>
            <h1>Hello, World!</h1>
            <ul>
                <li><a href="/index.php/login">Login</a></li>
                <li><a href="/index.php/logout">Logout</a></li>
            </ul>
        </body>
    </html>
HTML;
});

$app->get("/login", function() {
    /**
     * Some quick HTML for a login test implementation
     */
    print <<<HTML
    <html>
        <head><title>Login</title></head>
        <body>
            <h1>Login</h1>
            <form action="/index.php/api/login" method="post">
            <table>
            <tr><td> <label>Username</label> </td><td> <input type="text" name="username" /> </td></tr>
            <tr><td> <label>Password</label> </td><td> <input type="password" name="password" /> </td></tr>
            <tr><td colspan=2> <input type="submit"> </td></tr>
            </table>
            </form>
        </body>
    </html>
HTML;
});

$app->post("/api/login/", function() use ($app) {
    /**
     * Params should be: `username', `password'
     */
    $username = $app->request->params('username');
    $password = $app->request->params('password');
    
    if ($username === NULL or $password === NULL)
        die("No username or password passed");
    
    $Authe = new Authe();
    $Authe->checkAndDoLogin($username, $password);
    
});

$app->get("/api/user/", function() {

});

/**
 * A temporary hack until I write a better API
 */
$app->get("/api/logout/", function() {

});

$app->run();