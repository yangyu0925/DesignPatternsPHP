<?php

class UserObserver implements SplObserver
{
    // 观察者对象只要实现这个SplSubject接口的update 方法就可以
    // PHP中可以通过目标对象Subject 或 SplSubject::notify()来调用
    public function update(\SplSubject $subject)
    {
        echo get_class($subject) . ' has been updated';
    }
}