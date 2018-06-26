<?php

// 实体类外部容器
class ArrayConfig extends AbstractConfig implements Parameters
{
    public function get($key, $default = null)
    {
        if (isset($this->storage[$key])) {
            return $this->storage[$key];
        }
        return $default;
    }

    public function set($key, $value)
    {
        $this->storage[$key] = $value;
    }
}
