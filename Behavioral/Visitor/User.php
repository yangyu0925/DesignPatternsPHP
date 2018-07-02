<?php

// 用户类型的对象结构
class User extends Role
{
    protected $name;

    public function __construct($name)
    {
        $this->name = (string) $name;
    }

    public function getName()
    {
        return "User " . $this->name;
    }
}