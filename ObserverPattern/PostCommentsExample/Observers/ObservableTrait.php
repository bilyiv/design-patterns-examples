<?php

namespace ObserverPattern\PostCommentsExample\Observers;

/**
 * Trait ObservableTrait
 *
 * @package ObserverPattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
trait ObservableTrait
{
    /**
     * @var array
     */
    private $observers;

    /**
     * Attach observer to observable subject.
     *
     * @param ObserverInterface $observer
     */
    public function attach(ObserverInterface $observer)
    {
        $id = $this->getObserverId($observer);

        $this->observers[$id] = $observer;
    }

    /**
     * Detach observer to observable subject.
     *
     * @param ObserverInterface $observer
     */
    public function detach(ObserverInterface $observer)
    {
        $id = $this->getObserverId($observer);

        unset($this->observers[$id]);
    }

    /**
     * Notify attached to the observable subject observers.
     *
     * @param $event
     */
    public function notify($event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event, $this);
        }
    }

    /**
     * @param ObserverInterface $observer
     * @return string
     */
    private function getObserverId(ObserverInterface $observer)
    {
        return spl_object_hash($observer);
    }
}