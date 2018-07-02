<?php

// 访问者角色接口
interface RoleVisitorInterface
{
    // 访问User对象
    public function visitUser(User $role);

    // 访问Group对象
    public function visitGroup(Group $role);
}