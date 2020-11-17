<?php

/**
 * Interface IAnimal
 * Every class inherits this interface MUST have these methods
 */
interface IAnimal {

    /**
     * Changes the name of the animal to the specified value.
     * @param string $name The new animal name.
     */
    public function setName(string $name);

    /**
     * Changes the sound of the animal to the specified value.
     * @param string $sound The new animal sound.
     */
    public function setSound(string $sound);

    /**
     * Returns the name of the animal.
     * @return string|null Returns either the name or nothing if its not set.
     */
    public function getName();

    /**
     * Returns the sound a animal makes.
     * @return string|null Returns either the name of nothing if its not set.
     */
    public function sound();
}