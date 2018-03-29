<?php

namespace CompositePattern\RendererExample\Form;

use CompositePattern\RendererExample\RenderableInterface;

/**
 * Class TextInput
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class TextInput implements RenderableInterface
{
    /**
     * @var string
     */
    private $defaultValue;

    public function __construct(string $default_value = "")
    {
        $this->defaultValue = $default_value;
    }

    /**
     * @inheritdoc
     */
    public function render(): string
    {
        return "<input type=\"text\" value=\"{$this->defaultValue}\" />";
    }
}