<?php

// 中介者实体类
class Mediator implements MediatorInterface
{
    protected $server;

    protected $database;

    protected $client;

    public function setColleague(Database $db, Client $cl, Server $srv)
    {
        $this->database = $db;
        $this->server = $srv;
        $this->client = $cl;
    }

    // 由client发出request，由server去处理
    public function makeRequest()
    {
        $this->server->process();
    }

    public function queryDb()
    {
        return $this->database->getData();
    }

    public function sendResponse($content)
    {
        $this->client->output($content);
    }
}