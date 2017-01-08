<?php

namespace TodoList\Domain\Model\Item;

use TodoList\Domain\Types\ValueObject\IdentifierUuid;

/**
 * ItemId
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
final class ItemId extends IdentifierUuid
{
    /**
     * @param ItemId $itemId
     *
     * @return bool
     */
    public function equals(ItemId $itemId)
    {
        return $this->id() === $itemId->id();
    }
}