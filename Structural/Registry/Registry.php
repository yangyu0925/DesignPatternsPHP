<?php

abstract class Registry
// 或用 final class Registry
{
    const LOGGER = 'logger';

    private static $storedValues = array();

    /**
     * set a value
     */
    public static function set($key, $object)
    {
        self::$storedValues[$key] = $object;
    }

    /**
     * get a value from the registry
     */
    public static function get($key)
    {
        if (!isset(self::$storedValues[$key])) {
            if (class_exists ($key)) {
                self::$storedValues[$key] = new $key();
            } else {
                return null;
            }
        }
        return self::$storedValues[$key];
    }
}