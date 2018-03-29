<?php

namespace ObserverPattern\PostCommentsExample\Observers\Post;

use ObserverPattern\PostCommentsExample\Post;
use ObserverPattern\PostCommentsExample\Observers\{
    ObservableInterface,
    ObserverInterface
};

/**
 * Class Logger
 *
 * @package ObserverPattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Logger implements ObserverInterface
{
    /**
     * @inheritdoc
     */
    public function update($event, ObservableInterface $observable)
    {
        /**
         * @var $observable Post
         */
         if ($event === Post::COMMENTED_EVENT) {
             echo "The post \"{$observable->getTitle()}\" was commented." . PHP_EOL;
        }
    }
}