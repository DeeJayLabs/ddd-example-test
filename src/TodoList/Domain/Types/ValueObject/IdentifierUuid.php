<?php

namespace TodoList\Domain\Types\ValueObject;

use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

/**
 * IdentifierUuid
 *
 * @author Sergio de Candelario <sergio.decandelario@gmail.com>
 */
class IdentifierUuid
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
    public function __construct($id)
    {
        $this->guard($id);

        $this->id = $id;
    }

    private function guard($id)
    {
        if (!$this->isValid($id)) {
            throw new InvalidArgumentException(
                sprintf('<%s> does not allow the identifier <%s>.', static::class, is_scalar($id) ? $id : gettype($id))
            );
        }
    }

    private function isValid($id) : bool
    {
        return is_string($id) && Uuid::isValid($id);
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->id;
    }

}