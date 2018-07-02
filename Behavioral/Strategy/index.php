<?php

// 客户端调用
$collection = array(array('date' => '2014-02-03'),
    array('date' => '2013-02-01'), array('date' => '2015-02-02'));
$obj = new ObjectCollection($collection);
$obj->setComparator(new DateComparator());
$elements = $obj->sort();
$firstElement = array_shift($elements);
echo $firstElement;