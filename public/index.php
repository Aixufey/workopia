<?php
require '../helpers.php';

// Require Router script
require basePath('Router.php');
// Instantiate router
$router = new Router();
// Require available routes
$routes = require basePath('routes.php');

// Request URI and method
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// Pass request args into our router and route to correct controller.
$router->route($uri, $method);