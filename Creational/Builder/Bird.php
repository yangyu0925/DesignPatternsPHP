<?php

namespace DesignPatterns\Creational\Builder;

class Bird
{
    public $head;
    public $wing;
    public $foot;

    public function show()
    {
        echo "头的颜色:{$this->_head}<br/>";
        echo "翅膀的颜色:{$this->_wing}<br/>";
        echo "脚的颜色:{$this->_foot}<br/>";
    }
}
