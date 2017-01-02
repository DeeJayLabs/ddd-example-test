<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__ . '/../app/services.php';

require __DIR__ . '/../app/controllers.php';

$app->run();