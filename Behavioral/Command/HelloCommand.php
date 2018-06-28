<?php

class HelloCommand implements CommandInterface
{
    /**
     * @var Receiver
     */
    protected $output;

    // 每一个实体命令类可以有不同的命令接收方,也可以有多个
    // php命令模式中最关键的是新建命令实例对象时, 需要将接收方当作构造函数的参数
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    // 执行输出内容
    public function execute()
    {
        // 当没有接收方时,这个命令就当作是全部的工作
        $this->output->write('Hello World');
    }
}