<?php

// null logger 也继承接口
class NullLogger implements LoggerInterface
{
    public function log($str)
    {
        // 留空什么也不用做
    }
}