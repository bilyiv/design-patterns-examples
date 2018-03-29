<?php

namespace ObserverPattern\PostCommentsExample\Observers\Post;

use ObserverPattern\PostCommentsExample\Post;
use ObserverPattern\PostCommentsExample\Observers\{
    ObservableInterface,
    ObserverInterface
};

/**
 * Class Mailer
 *
 * @package ObserverPattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Mailer implements ObserverInterface
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
             echo "Send the email to the author." . PHP_EOL;
        }
    }
}