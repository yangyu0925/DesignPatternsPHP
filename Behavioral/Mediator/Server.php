<?php

// 几个合作者实例，都只能通过getMediator()调用相应方法和其他合作者对象交互。
class Server extends Colleague
{
    public function process()
    {
        $data = $this->getMediator()->queryDb();
        $this->getMediator()->sendResponse("Hello $data");
    }
}

class Database extends Colleague
{
    public function getData()
    {
        return "World";
    }
}

class Client extends Colleague
{
    public function request()
    {
        $this->getMediator()->makeRequest();
    }

    public function output($content)
    {
        echo $content;
    }
}