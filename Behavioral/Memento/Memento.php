<?php

// 备忘录
class Memento
{
    private $state; // 也是私有

    public function __construct($stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}