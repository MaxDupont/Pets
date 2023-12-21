<?php

namespace src;

class Dog extends Pet
{
    public function __construct()
    {
        $this->name = 'Собака';
    }


    function getName()
    {
        return $this->name;
    }


    function makeSound() : string
    {
        return 'Гав';
    }
}