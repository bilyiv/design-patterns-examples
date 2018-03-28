<?php

namespace CompositePattern\RendererExample\Form;

use CompositePattern\RendererExample\AbstractElement;

/**
 * Class Form
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Form extends AbstractElement
{
    /**
     * @inheritdoc
     */
    public function render(): string
    {
        $output = "<form>";

        foreach ($this->items as $item) {
            $output .= $item->render();
        }

        return $output . "</form>";
    }
}