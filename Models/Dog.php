<?php

/**
 * Class Dog
 * Implements the IAnimal interface which makes the CLASS type IAnimal.
 */
class Dog implements IAnimal {

    /**
     * @var null|string The name of the animal
     */
    private $name = null;

    /**
     * @var null|string The sound of the animal
     */
    private $sound = null;

    /**
     * Changes the name of the animal to the specified value.
     * @param string $name The new animal name.
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Changes the sound of the animal to the specified value.
     * @param string $sound The new animal sound.
     */
    public function setSound(string $sound)
    {
        $this->sound = $sound;
    }

    /**
     * Returns the name of the animal.
     * @return string|null Returns either the name or nothing if its not set.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the sound a animal makes.
     * @return string|null Returns either the name of nothing if its not set.
     */
    public function sound()
    {
        return $this->sound;
    }
}