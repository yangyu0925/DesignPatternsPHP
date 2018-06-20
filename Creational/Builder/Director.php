<?php

namespace DesignPatterns\Creational\Builder;

class Director
{
    function __construct(BirdBuilder $builder)
    {
        $builder->buildHead();
        $builder->buildWing();
        $builder->buildFoot();
        return $builder->getBird();
    }
}
