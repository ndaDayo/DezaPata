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

        while ($bookShelf->hasNext()) {
            echo $bookShelf->next()->getName().PHP_EOL;
        }
    }
}
