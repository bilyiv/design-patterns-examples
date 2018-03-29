<?php

namespace CompositePattern\RendererExample\Tags;

use CompositePattern\RendererExample\RenderableInterface;

/**
 * Class H1Tag
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class H1Tag implements RenderableInterface
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function render(): string
    {
        return "<h1>{$this->value}</h1>";
    }
}