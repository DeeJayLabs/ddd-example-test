<?php

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    array(
        'twig.path' => __DIR__ . '/../src/TodoList/Infrastructure/UI/views',
    )
);