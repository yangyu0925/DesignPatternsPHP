<?php

abstract class Component
{
    abstract public function operation();
}

class ConcreteComponent extends Component
{
    public function operation()
    {
        echo __CLASS__ .  '|' . __METHOD__ . "\r\n";
    }
}

abstract class Decorator extends Component
{
    /**
     * 持有Component的对象
     */
    protected $component;

    /**
     * 构造方法传入
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
}

class ConcreteDecoratorA extends Decorator
{
    //在调用父类的operation方法的前置操作
    public function beforeOperation()
    {
        echo __CLASS__ . '|' . __METHOD__ . "\r\n";
    }

    //在调用父类的operation方法的后置操作
    public function afterOperation()
    {
        echo __CLASS__ . '|' . __METHOD__ . "\r\n";
    }

    public function operation()
    {
        $this->beforeOperation();
        $this->component->operation();//这里可以选择性的调用父类的方法，如果不调用则相当于完全改写了方法，实现了新的功能
        $this->afterOperation();
    }
}

class ConcreteDecoratorB extends Decorator
{
    //在调用父类的operation方法的前置操作
    public function beforeOperation()
    {
        echo __CLASS__ . '|' . __METHOD__ . "\r\n";
    }

    //在调用父类的operation方法的后置操作
    public function afterOperation()
    {
        echo __CLASS__ . '|' . __METHOD__ . "\r\n";
    }

    public function operation()
    {
        $this->beforeOperation();
        $this->component->operation();//这里可以选择性的调用父类的方法，如果不调用则相当于完全改写了方法，实现了新的功能
        $this->afterOperation();
    }
}

$component = new ConcreteComponent();
$decoratorA = new ConcreteDecoratorA($component);
$decoratorB = new ConcreteDecoratorB($decoratorA);


$decoratorB->operation();
