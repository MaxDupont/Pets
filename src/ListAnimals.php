<?php

namespace src;

class ListAnimals
{
    /**
     * @return array<Pet>
     */
    public function getAnimals() : array
    {
        return [new Dog(), new Cat(), new Rooster(), new Cow()];
    }
}