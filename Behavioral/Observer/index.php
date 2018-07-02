<?php

// 客户端调用
$observer = new UserObserver();
$subject = new UserSubject();
$subject->attach($observer);
$subject->data['test'] = 123; // 自动更新$observer