<?php

namespace CompositePattern\RendererExample;

/**
 * Interface RenderableInterface
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface RenderableInterface
{
    /**
     * Render the element in some way.
     *
     * @return string
     */
    public function render(): string;
}