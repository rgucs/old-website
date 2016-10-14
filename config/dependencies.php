<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['view'] = function ($c) {
  $settings = $c->get('settings')['view'];

  $view = new \Slim\Views\Twig($settings['template_path'], [
    'cache' => $settings['cache_path'],
    'debug' => true
  ]);

  $view->addExtension(new \Slim\Views\TwigExtension(
    $c['router'],
    $c['request']->getUri()
  ));

  return $view;
};

// monolog
$container['logger'] = function ($c) {
  $settings = $c->get('settings')['logger'];
  $logger = new Monolog\Logger($settings['name']);
  $logger->pushProcessor(new Monolog\Processor\UidProcessor());
  $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
  return $logger;
};

// Service factory for the ORM
$container['database'] = function ($c) {
  $settings = $c->get('settings')['database'];

  $capsule = new \Illuminate\Database\Capsule\Manager;
  $capsule->addConnection($settings);

  $capsule->setAsGlobal();
  $capsule->bootEloquent();

  return $capsule;
};

$container['notFoundHandler'] = function($c) {
  return function($request, $response) use ($c) {
    $c['view']->render($response, '404.twig');

    return $response->withStatus(404);
  };
};
