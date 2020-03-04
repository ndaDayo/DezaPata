<?php

namespace App\Subjects;

use App\Interfaces\SubjectInterface;
use App\Interfaces\ObserverInterface;

class BulletinBoard implements SubjectInterface
{
    /** 投稿者の名前
     * @var
     */
    private $name;

    /**
     * @var array
     */
    private $comments = [];

    /**
     * @var array
     */
    private $listeners = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 投稿した人の名前を返す
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 投稿者の名前とコメントを表示
     *
     * @param $massage
     * @return string
     */
    public function comment($massage)
    {
        echo sprintf('%s: %s<br>', $this->getName(), $massage);
        $this->processComment($massage);
    }

    /**
     * コメントを配列に追加する
     *
     * @param $message
     */
    public function addComment($message)
    {
        $this->comments[] = $message;
    }

    /**
     * コメントに追加してオブザーバーに通知する
     *
     * @param $massage
     */
    public function processComment($massage)
    {
        $this->addComment($massage);
        $this->notify();
    }

    /**
     * オブザーバーに登録する
     *
     * @param ObserverInterface $listener
     * @return mixed|void
     */
    public function addObserver(ObserverInterface $listener)
    {
        $this->listeners[get_class($listener)] = $listener;
    }

    /**
     * オブザーバーから削除する
     *
     * @param ObserverInterface $listener
     * @return mixed|void
     */
    public function removeObserver(ObserverInterface $listener)
    {
        $this->listeners[get_class($listener)];
    }

    /**
     * 登録されたオブザーバーに通知する
     *
     * @return mixed|void
     */
    public function notify()
    {
        foreach ($this->listeners as $listener){
            $listener->execute($this);
        }
    }
}