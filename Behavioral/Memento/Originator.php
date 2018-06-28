<?php

// 发起人
class Originator
{
    private $state; // 状态必须私有

    private $other_data;

    public function setState($state)  // 公共方法
    {
        $this->state = $state;
    }

    // 把状态保存到备忘录
    public function saveToMemento()
    {
        $state = is_object($this->state) ? clone $this->state : $this->state;

        return new Memento($state);
    }

    // 从备忘录中恢复状态
    public function restoreFromMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}