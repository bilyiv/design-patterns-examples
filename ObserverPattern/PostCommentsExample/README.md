## UML

![Observer pattern example UML](https://raw.githubusercontent.com/bilyiv/design-patterns-php-examples/master/ObserverPattern/PostCommentsExample/uml.png)

## How to use
```php
<?php

$logger = new Logger();
$mailer = new Mailer();

$post = new Post("Test post");
$post->attach($logger);

$post->addComment("The first comment.");
$mailer->update(Post::COMMENTED_EVENT, $post);

$post->addComment("Some other comment.");
$mailer->update(Post::COMMENTED_EVENT, $post);
```
