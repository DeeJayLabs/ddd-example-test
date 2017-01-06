<?php
use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Doctrine\DBAL\Types\Type;
use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use TodoList\Infrastructure\Repository\Doctrine\Config\CustomTypes\ItemIdCustomType;

$app = new Application();
$app->register(
    new TwigServiceProvider(),
    array(
        'twig.path' => __DIR__ . '/../src/TodoList/Infrastructure/UI/views',
    )
);

$app->register(
    new DoctrineServiceProvider(),
    array(
        'db.options' => array(
            'driver' => 'pdo_mysql',
            'dbname' => 'ddd-example',
            'host' => 'mysql',
            'user' => 'silex',
            'password' => 'silex',
        )
    )
);

$app->register(
    new DoctrineOrmServiceProvider(),
    array(
        "orm.em.options" => array(
            "mappings" => array(
                array(
                    "type" => "simple_yml",
                    'namespace' => 'TodoList\Domain\Model',
                    "path" => __DIR__ . '/../src/TodoList/Infrastructure/Repository/Doctrine/Config/Mappings',
                ),
            ),
        ),
    )
);

/** @var \Doctrine\DBAL\Connection $conn */
$conn = $app['orm.em']->getConnection();

Type::addType('item_id', ItemIdCustomType::class);
$conn->getDatabasePlatform()->registerDoctrineTypeMapping('dm_item_id', 'item_id');

return $app;
