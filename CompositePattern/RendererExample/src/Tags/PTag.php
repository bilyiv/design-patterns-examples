<?php

namespace CompositePattern\RendererExample\Tags;

use CompositePattern\RendererExample\RenderableInterface;

/**
 * Class PTag
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class PTag implements RenderableInterface
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
        return "<p>{$this->value}</p>";
    }
}