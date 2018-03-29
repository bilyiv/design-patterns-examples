<?php

namespace CompositePattern\RendererExample\Form;

use CompositePattern\RendererExample\RenderableInterface;

/**
 * Class Label
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Label implements RenderableInterface
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
        return "<label>{$this->value}</label>";
    }
}