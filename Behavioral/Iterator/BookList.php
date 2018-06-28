<?php

// 可计数的书的集合列表类
class BookList implements Countable
{
    private $books;

    public function getBook(int $bookIndex)
    {
        if ($bookIndex > 0 && $bookIndex <= $this->count()) {
            return $this->books[$bookIndex];
        }

        return null;
    }

    public function addBook(Book $book)
    {
        $this->books[] = $book;

        return $this->count();
    }

    public function removeBook(Book $bookToRemove)
    {
        foreach ($this as $key => $book) {
            /** @var Book $book */
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }

        return $this->count();
    }

    public function count()
    {
        return count($this->books);
    }
}