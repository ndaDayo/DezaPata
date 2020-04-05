<?php

namespace App;

use App\BookShelf;

class Main
{
    public function exec()
    {
        $bookShelf = new BookShelf();
        $bookShelf->appendBook(new Book('村西とおるがお答えします! ワガママな中国人とのナイスなお付き合い'));
        $bookShelf->appendBook(new Book('ナイスですね―「村西とおるの挑戦状」'));
        $bookShelf->appendBook(new Book('村西とおる語録集 どんな失敗の中にも希望はあるのでございます'));

        for ($i = 0; $i < $bookShelf->getLength(); $i++) {
            echo $bookShelf->getBookAt($i)->getName() . PHP_EOL;
        }
    }
}