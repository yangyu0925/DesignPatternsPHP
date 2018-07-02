<?php

// 组类型的对象结构
class Group extends Role
{
    protected $name;

    public function __construct($name)
    {
        $this->name = (string) $name;
    }

    public function getName()
    {
        return "Group: " . $this->name;
    }
}