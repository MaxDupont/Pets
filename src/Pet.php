<?php

namespace src;

abstract class Pet
{
    protected $name;

    abstract function getName();

    abstract function makeSound(): string;
}