<?php

namespace src;

class Cow extends Pet
{

    function __construct()
    {
        $this->name = 'Корова';
    }


    function getName()
    {
        return $this->name;
    }


    function makeSound(): string
    {
        return 'Му';
    }
}