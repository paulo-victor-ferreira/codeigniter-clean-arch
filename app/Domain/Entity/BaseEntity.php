<?php

namespace App\Domain\Entity;

abstract class BaseEntity
{
    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        $className = get_called_class();

        throw new \InvalidArgumentException("Property $name does not exist in $className.");
    }
}
