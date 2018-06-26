<?php

// 对象在内存中
class User
{
    protected $userId;

    protected $username;

    public function __construct($id = null, $username = null)
    {
        $this->userId = $id;
        $this->username = $username;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserID($userId)
    {
        $this->userId = $userId;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

}