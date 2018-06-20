<?php

namespace DesignPatterns\Creational\AbstractFactory;

class JsonParser implements Parser
{
    public function parser(string $input): array
    {
        return json_decode($input, true);
    }
}