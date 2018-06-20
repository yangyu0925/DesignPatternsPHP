<?php

namespace DesignPatterns\Creational\AbstractFactory;

interface Parser
{
    public function parser(string $input): array;
}
