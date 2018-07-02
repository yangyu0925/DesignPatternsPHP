<?php

class UserSubject implements SplSubject
{
    protected $data = array();  // 数据

    protected $observers = array(); // 观察者容器

    // 添加一个新的观察者/订阅者
    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    // 移除一个观察者/订阅者
    public function detach(SplObserver $observer)
    {
        $index = array_search($observer, $this->observers);

        if (false !== $index) {
            unset($this->observers[$index]);
        }
    }

    // 下面的魔术方法在所有属性更改时都进行通知
    // 最好再为所有的合法的属性写getter/setter方法，并且更新时notify()只通知有必要通知的属性
    public function __set($name, $value)
    {
        $this->data[$name] = $value;

        // 通知观察者已经UserSubject 已经变化
        $this->notify();
    }

    // 通知观察者/订阅方并更新
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}