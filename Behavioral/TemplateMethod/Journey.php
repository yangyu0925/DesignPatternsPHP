<?php

// 抽象模板类
abstract class Journey
{
    // 抽象类及其子类提供的公共服务
    // final关键字冻结了本算法的全局行为
    final public function takeATrip()
    {
        $this->buyAFlight();
        $this->takePlane();
        $this->enjoyVacation();
        $this->buyGift();
        $this->takePlane();
    }

    // 抽象模板方法： 模板方法设计模式的关键-子类必须实现该方法
    abstract protected function enjoyVacation();

    // 可选
    protected function buyGift()
    {
    }

    // private 让子类无法知道这个方法
    private function buyAFlight()
    {
        echo "Buying a flight\n";
    }

    // 子类可以访问该方法但不能重写
    final protected function takePlane()
    {
        echo "Taking the plane\n";
    }

    // 作者提示：final 关键字到了最后，知道了哪些方法是不会变的时候，才去加final。刚开始编码时不加。
}