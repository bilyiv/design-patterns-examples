<?php

namespace CompositePattern\RendererExample;

/**
 * Class AbstractElement
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
abstract class AbstractElement implements RenderableInterface
{
    /**
     * @var array Renderable
     */
    protected $items = [];

    /**
     * @inheritdoc
     */
    public function addItem(RenderableInterface $item)
    {
        $this->items[] = $item;
    }

    /**
     * @inheritdoc
     */
    abstract public function render(): string;
}