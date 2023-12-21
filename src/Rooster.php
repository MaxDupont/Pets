<?php

namespace src;

class Rooster extends Pet
{
    function __construct()
    {
        $this->name = 'Петух';
    }


    function getName()
    {
        return $this->name;
    }


    function makeSound(): string
    {
        return 'Кукареку';
    }
}