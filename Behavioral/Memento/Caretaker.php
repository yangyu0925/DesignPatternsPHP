<?php

// 负责人
class Caretaker
{
    public static function run()
    {
        $savedStates = array(); // 备忘录对象数组

        $originator = new Originator();

        // 负责人设置发起人状态1
        $originator->setState("State1");
        // 负责人设置发起人状态2
        $originator->setState("State2");
        // 保存状态2到 Memento
        $savedStates[] = $originator->saveToMemento();

        // 负责人设置发起人状态3
        $originator->setState("State3");
        // 保存状态3到 Memento
        $savedStates[] = $originator->saveToMemento();

        // 负责人设置发起人状态4
        $originator->setState("State4");
        // 我们可以请求多个$savedStates中的备忘录对象，并选择其中一个回滚。
        $originator->restoreFromMemento($savedStates[1]); // 回滚到状态 State3
    }
}