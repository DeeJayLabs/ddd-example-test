<?php

$app->get('/', function () use ($app) {

    $items = $app['repository.item.doctrine']->findAll();

    return $app['twig']->render('index.html.twig', [
        'items' => $items
    ]);
})->bind('index');

$app->get('/add-item', function () use ($app) {

    return $app['twig']->render('index.html.twig');
})->bind('add-item');

$app->get('/phpinfo', function () use ($app) {
    echo phpinfo();
});