<?php

namespace TodoList\Domain\Entity\Item;

/**
 * Item.
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
class Item
{
    private $id;

    private $name;

    public function name()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function id()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
