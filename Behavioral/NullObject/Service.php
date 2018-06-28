<?php

class Service
{
    protected $logger;

    // 在构造函数中强制注入logger
    public function __construct(LoggerInterface $log)
    {
        $this->logger = $log;
    }

    // 程序中调用记录日志
    public function doSomething()
    {
        // 用了NullObject模式下面就不必用 if (!is_null($this->logger)) 来判断了
        $this->logger->log('We are in ' . __METHOD__);
        // something to do...
    }
}