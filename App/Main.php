<?php

namespace App;

use App\BookShelf;
use App\Book;

class Main
{
    public function exec()
    {
        $bookShelf = new BookShelf();
        $bookShelf->appendBook(new Book('村西とおるがお答えします! ワガママな中国人とのナイスなお付き合い'));
        $bookShelf->appendBook(new Book('ナイスですね―「村西とおるの挑戦状」'));
        $bookShelf->appendBook(new Book('村西とおる語録集 どんな失敗の中にも希望はあるのでございます'));

        $orderIterator = $bookShelf->orderIterator();

        echo "順走！！！";
        while ($orderIterator->hasNext()) {
            echo $orderIterator->next()->getName() . PHP_EOL;
        }

        $reverseIterator = $bookShelf->reverseIterator();

        echo "逆走！！！";
        while ($reverseIterator->hasNext()) {
            echo $reverseIterator->next()->getName() . PHP_EOL;
        }
    }
}
