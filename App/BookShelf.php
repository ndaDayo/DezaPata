<?php

namespace App;

use App\Book;

class BookShelf implements Aggregator
{
    /** @var array */
    private $books = [];

    /** @var */
    private $index = 0;

    /**
     * 本棚に本を追加
     *
     * @param Book $book
     */
    public function appendBook(Book $book)
    {
        $this->books[] = $book;
    }

    /**
     * 指定された本を返す
     *
     * @param int $index
     * @return mixed
     */
    public function getBookAt(int $index)
    {
        return $this->books[$index];
    }

    /**
     * 本の数を返す
     *
     * @return int|void
     */
    public function getLength()
    {
        return count($this->books);
    }

    /**
     * @inheritDoc
     */
    public function orderIterator()
    {
        return new OrderIterator($this);
    }

    /**
     * @inheritDoc
     */
    public function reverseIterator()
    {
        return new ReverseIterator($this);
    }
}

