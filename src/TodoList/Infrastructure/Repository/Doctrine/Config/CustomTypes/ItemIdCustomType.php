<?php

namespace TodoList\Infrastructure\Repository\Doctrine\Config\CustomTypes;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;
use TodoList\Domain\Model\Item\ItemId;

final class ItemIdCustomType extends Type
{
    const ITEM_ID = 'item_id';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return "varchar(255)";
    }

    public function getName()
    {
        return self::ITEM_ID;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return new ItemId($value);
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return (string) $value;
    }
}
