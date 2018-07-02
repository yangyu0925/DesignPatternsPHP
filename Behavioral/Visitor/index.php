<?php

// 客户端调用
$visitor = new RolePrintVisitor();
$role = new User("Farll");
$role->accept($visitor);

// 会输出： Role: User Farll