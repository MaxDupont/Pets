<?php

namespace src;

class Cat extends Pet
{

    function __construct()
    {
        $this->name = 'Кошка';
    }


    function getName()
    {
        return $this->name;
    }


    function makeSound(): string
    {
        return 'Мяу';
    }
}