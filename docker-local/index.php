<?php
require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();
// Please set to false in a production environment.
$app['debug'] = true;

$app->get('/hello/{name}', function($name) use($app) {
    return "Hello $name! This is running in docker-local, and shows the Cloud project is seperate from the codebase / git repo / project, and can even deploy uncommited code to production! \n";
});

    $app->run();

