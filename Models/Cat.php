<?php

/**
 * Class Cat
 * Does NOT implements the IAnimal interface.
 */
class Cat {

    /**
     * @var null|string The name of the animal
     */
    private $name = null;

    /**
     * Changes the name of the animal to the specified value.
     * @param string $name The new animal name.
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the name of the animal.
     * @return string|null Returns either the name or nothing if its not set.
     */
    public function getName()
    {
        return $this->name;
    }
}