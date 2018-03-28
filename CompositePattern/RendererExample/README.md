## UML

![Composite pattern example UML](https://raw.githubusercontent.com/bilyiv/design-patterns-php-examples/master/CompositePattern/RendererExample/composite-pattern-example-uml.png)

## How to use
```php
<?php

$form = new Form();
$form->addItem(new Label("First text input."));
$form->addItem(new TextInput());

$block = new Block();
$block->addItem(new H2Tag("My first block."));
$block->addItem($form);

$page = new Page("Main page");
$page->addItem(new PTag("Hello! This is your first page."));
$page->addItem($block);

echo $page->render();
```
