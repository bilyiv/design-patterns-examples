<?php

namespace ObserverPattern\PostCommentsExample\Observers;

/**
 * Interface ObservableInterface
 *
 * @package ObserverPattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface ObservableInterface
{
    /**
     * @inheritdoc
     */
    public function attach(ObserverInterface $observer);

    /**
     * @inheritdoc
     */
    public function detach(ObserverInterface $observer);

    /**
     * @inheritdoc
     */
    public function notify($event);
}