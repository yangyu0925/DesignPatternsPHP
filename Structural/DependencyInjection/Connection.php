<?php

class Connection
{
    protected $configuration;

    protected $host;

    public function __construct(Parameters $config)
    {
        $this->configuration = $config;
    }

    // 使用注入的config进行connect
    public function connect()
    {
        $host = $this->configuration->get('host');
        // connection to host, authentication etc...

        //if connected
        $this->host = $host;
    }

    // 获取当前连接的Host
    public function getHost()
    {
        return $this->host;
    }
}