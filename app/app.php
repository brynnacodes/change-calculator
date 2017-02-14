<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Change.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array (
    "twig.path" => __DIR__."/../views"
    ));

    $app['debug'] = true;


    return $app;
