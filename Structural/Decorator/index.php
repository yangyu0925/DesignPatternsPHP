<?php

// 客户端调用
$data = array('aaa'=>'bbb', 'ccc'=>'ddd');
$service = new Webservice($data);

$json = new RenderInJson($service);
$jsonData = $json->renderData();

$xml = new RenderInXml($service);
$xmlData = $xml->renderData();