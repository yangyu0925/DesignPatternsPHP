<?php

// 访问者,根据访问对象结构的对象不同定义不同的方法
class RolePrintVisitor implements RoleVisitorInterface
{
    public function visitUser(User $role)
    {
        echo "Role: " . $role->getName();
    }

    public function visitGroup(Group $role)
    {
        echo "Role: " . $role->getName();
    }
}