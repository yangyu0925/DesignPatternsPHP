<?php

// Face 外观类
class Facade
{
    // @var OsInterface
    protected $os;

    // @var BiosInterface
    protected $bios;

    // 这里可以用依赖注入容器来创建实例
    public function __construct(BiosInterface $bios, OsInterface $os)
    {
        $this->bios = $bios;
        $this->os = $os;
    }

    // 启动系统
    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    // 关闭系统
    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}