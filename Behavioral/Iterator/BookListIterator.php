<?php

// 实现可迭代的图书列表
class BookListIterator implements Iterator
{

    /**
     * @var BookList
     */
    protected $bookList;

    protected $currentBook = 1; // 不从0开始

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    // 返回当前索引位置的书
    public function current()
    {
        return $this->bookList->getBook($this->currentBook);
    }

    /**
     * (PHP 5 >= 5.0.0)
     * 移到下一个元素
     */
    public function next()
    {
        $this->currentBook++;
    }

    // 返回当前位置书籍的键
    public function key()
    {
        return $this->currentBook;
    }

    // 检查当前书籍是否有效
    public function valid()
    {
        return $this->currentBook < $this->bookList->count();
    }

    // 将迭代器调回到到第一个元素
    public function rewind()
    {
        $this->currentBook = 1;
    }
}