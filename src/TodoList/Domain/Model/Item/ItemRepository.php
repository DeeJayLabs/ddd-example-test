<?php

namespace TodoList\Domain\Model\Item;

/**
 * ItemRepository
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
interface ItemRepository
{
    public function find(ItemId $itemId);

    public function findAll();

    public function remove(Item $item);

    public function persist(Item $item);

    public function nextIdentity();
}