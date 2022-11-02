<?php
$request = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => __DIR__ . '/views/home.php',
    '/login' => __DIR__ . '/views/login.php',
    '/signup' => __DIR__ . '/views/signup.php',
    '/logout' => __DIR__ . '/views/logout.php',
    '/profile' => __DIR__ . '/views/profile.php',
];

if( array_key_exists($request, $routes) ){
    require $routes[$request];
} else {
    require __DIR__ . '/views/404.php';
}