<?php

// 客户端调用
$car = new Car(new Produce(), new Assemble());
$car->manufacture();

$mot = new Motorcycle(new Produce(), new Package());
$mot->manufacture();