<?php

namespace DesignPatterns\Creational\Builder;

class BlueBird extends BirdBuilder
{
    function buildHead()
    {
        $this->bird->head = "Blue";
    }

    function buildWing()
    {
        $this->bird->wing = "Blue";
    }

    function buildFoot()
    {
        $this->bird->foot = "Blue";
    }

    function getBird()
    {
        return $this->bird;
    }
}
