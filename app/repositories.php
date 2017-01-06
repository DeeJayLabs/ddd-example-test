<?php

use TodoList\Infrastructure\Repository\Doctrine\Person\ItemRepositoryDoctrine;

$app['repository.item.doctrine'] = function ($app) {
    return new ItemRepositoryDoctrine($app['orm.em']);
};