<?php

// 反向迭代
class BookListReverseIterator extends BookListIterator
{
    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
        $this->currentBook = $this->bookList->count();
    }

    public function next()
    {
        $this->currentBook--;
    }

    public function valid()
    {
        return 0 < $this->currentBook;
    }
}