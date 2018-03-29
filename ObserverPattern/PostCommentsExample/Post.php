<?php

namespace ObserverPattern\PostCommentsExample;

use ObserverPattern\PostCommentsExample\Observers\{
    ObservableInterface,
    ObservableTrait
};

/**
 * Class Post
 *
 * @package ObserverPattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Post implements ObservableInterface
{
    use ObservableTrait;

    /**
     * @const int
     */
    public const COMMENTED_EVENT = 1;

    /**
     * @var string
     */
    private $title;

    /**
     * @var array
     */
    private $comments = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $comment
     */
    public function addComment(string $comment)
    {
        $this->comments[] = $comment;

        $this->notify(self::COMMENTED_EVENT);
    }
}