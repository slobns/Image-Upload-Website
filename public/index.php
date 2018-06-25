<?php


require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application;

$app['debag'] = true;

// setup First root --- for example Home page

$app->register(new Silex\Provider\TwigServiceProvider, [
    
    'twig.path' => __DIR__ . '/../view'

]);

$app->get('/', function() use ($app){
	return $app['twig']->render('home.twig');
});

$app->run();

