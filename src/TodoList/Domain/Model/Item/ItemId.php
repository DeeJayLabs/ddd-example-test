<?php

namespace TodoList\Domain\Model\Item;

use Ramsey\Uuid\Uuid;

/**
 * ItemId
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
final class ItemId
{
    /**
     * @var
     */
    private $id;

    /**
     * ItemId constructor.
     *
     * @param null $id
     */
    public function __construct($id = null)
    {
        $this->id = $id ?: Uuid::uuid4()->toString();
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @param ItemId $itemId
     * @return bool
     */
    public function equals(ItemId $itemId)
    {
        return $this->id() === $itemId->id();
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->id;
    }
}