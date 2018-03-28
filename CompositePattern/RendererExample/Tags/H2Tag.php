<?php

namespace CompositePattern\RendererExample\Tags;

use CompositePattern\RendererExample\RenderableInterface;

/**
 * Class H2Tag
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class H2Tag implements RenderableInterface
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
        return "<h2>{$this->value}</h2>";
    }
}