<?php
require_once __DIR__ . '/vendor/autoload.php';
// front controller php that handles the mapping of associates URL paths with their corresponding PHP script paths.

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/intro' => __DIR__ . '/intro.php',
    '/leave' => __DIR__ . '/leave.php',
];


$thePath = $request->getPathInfo();
if (isset($map[$thePath])) {
    require $map[$thePath];
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}
