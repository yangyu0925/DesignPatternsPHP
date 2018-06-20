<?php

namespace DesignPatterns\Creational\Builder;

class RoseBird extends BirdBuilder
{
    function buildHead()
    {
        $this->bird->head = "Red";
    }

    function buildWing()
    {
        $this->bird->wing = "Red";
    }

    function buildFoot()
    {
        $this->bird->foot = "Red";
    }

    function getBird()
    {
        return $this->bird;
    }

}