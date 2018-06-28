<?php

interface MediatorInterface
{

    public function queryDb();

    public function sendResponse($content);
}