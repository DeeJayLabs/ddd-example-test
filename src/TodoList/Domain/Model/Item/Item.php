<?php

namespace TodoList\Domain\Model\Item;

/**
 * Item
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
final class Item
{
    /**
     * @var ItemId
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * Item constructor.
     * @param ItemId $id
     * @param $title
     */
    public function __construct(ItemId $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * @return ItemId
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }
}