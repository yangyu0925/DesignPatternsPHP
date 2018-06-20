<?php

namespace DesignPatterns\Creational\Builder;

abstract class BirdBuilder
{
    protected $bird;

    public function __construct()
    {
        $this->bird = new Bird();
    }

    abstract function buildHead();

    abstract function buildWing();

    abstract function buildFoot();

    abstract function getBird();
}