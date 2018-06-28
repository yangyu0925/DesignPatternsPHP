<?php

class Invoker
{
    protected $command;

    // 请求方订阅命令,可以是单个命令,或一个命令的列表等其他类型
    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    // 执行命令
    public function run()
    {
        // 不管命令是什么, 这里请求方是一样的
        $this->command->execute();
    }
}