<?php

namespace CompositePattern\RendererExample\Page;

use CompositePattern\RendererExample\AbstractElement;
use CompositePattern\RendererExample\Tags\H1Tag;

/**
 * Class Page
 *
 * @package CompositePattern
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
class Page extends AbstractElement
{
    /**
     * @var string
     */
    private $title;

    public function __construct(string $title)
    {
        $this->title = new H1Tag($title);
    }

    /**
     * @inheritdoc
     */
    public function render(): string
    {
        $output = "<article>";

        $output .= $this->title->render();

        foreach ($this->items as $item) {
            $output .= $item->render();
        }

        return $output . "</article>";
    }
}