<?php

// Bios接口
interface BiosInterface
{
    // 运行Bios
    public function execute();

    // 等待停止
    public function waitForKeyPress();

    // 登录系统
    public function launch(OsInterface $os);

    // Bios关机
    public function powerDown();
}