<?php

class Sql
{
    protected $fields = array();

    protected $from = array();

    protected $where = array();

    // 添加查询字段
    public function select(array $fields = array())
    {
        $this->fields = $fields;

        return $this;
    }

    // 添加from 条件
    public function from($table, $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    // 添加where 条件
    public function where($condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    // 获得query语句
    public function getQuery()
    {
        return 'SELECT ' . implode(',', $this->fields)
            . ' FROM ' . implode(',', $this->from)
            . ' WHERE ' . implode(' AND ', $this->where);
    }
}