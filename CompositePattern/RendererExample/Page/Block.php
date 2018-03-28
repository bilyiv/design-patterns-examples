<?php

namespace CompositePattern\RendererExample\Page;

use CompositePattern\RendererExample\AbstractElement;

/**
 * Class Block
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Block extends AbstractElement
{
    /**
     * @inheritdoc
     */
    public function render(): string
    {
        $output = "<div>";

        foreach ($this->items as $item) {
            $output .= $item->render();
        }

        return $output . "</div>";
    }
}