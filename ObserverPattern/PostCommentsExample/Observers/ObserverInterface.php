<?php

namespace ObserverPattern\PostCommentsExample\Observers;

/**
 * Interface ObserverInterface
 *
 * @package ObserverPattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface ObserverInterface
{
    /**
     * @inheritdoc
     */
    public function update($event, ObservableInterface $observable);
}