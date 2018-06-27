<?php

class ProxySubject
// class ProxySubject extends RealSubject
{
    private $_subject = null;
    // 继承原对象的话则不用私有变量

    public function __construct()
    {
        $this->_subject = new RealSubject();
    }

    public function request()
    {
        $this->preRequest();
        $this->_subject->request(); // 继承原对象则 parent::request();
        $this->postRequest();
    }

    public function preRequest()
    {
    }

    public function postRequest()
    {
    }
}