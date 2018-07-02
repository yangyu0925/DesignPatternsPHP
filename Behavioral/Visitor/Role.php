<?php

// 角色抽象类 - 对象结构
abstract class Role
{
    // 接收访问者的访问，根据Visitor的名称分发，可以重写这个方法使用访问者的其他你想用的回调方法
    public function accept(RoleVisitorInterface $visitor)
    {
        // 获得是User 还是 Group 实体类调用的，从而得出用哪个回调方法
        $klass = get_called_class(); //后期静态绑定，若是php get_class()会返回Role
        $visitingMethod = 'visit' . $klass;
        // preg_match('#([^\\\\]+)$#', $klass, $extract);
        // $visitingMethod = 'visit' . $extract[1];

        // 确保只有访问者角色接口中的定义过的方法才能回调
        if (!method_exists( 'RoleVisitorInterface', $visitingMethod)) {
            throw new Exception("The visitor you provide cannot visit a $klass instance");
        }

        call_user_func(array($visitor, $visitingMethod), $this);
    }
}