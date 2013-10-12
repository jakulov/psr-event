PSR Event
=========

Standarisation of event for compatibility between all component event implement psr-event

Use interfaces of https://github.com/symfony/EventDispatcher for create standart full.

This repository holds all interfaces/classes/traits related to
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-event-interface.md).

Note that this is not a eventDispatcher of its own. It is merely an interface that
describes a EventDispatcher, EventSubscriber, EventInterface and GenericEventInterface. See the specification for more details.

Usage
-----

If you need a eventDispatcher, you can use the interface like this:

```php
<?php

use Psr\Log\EventDispatcherInterface;
use Psr\Log\EventInterface;

class Foo
{
    private $logger;

    public function __construct(EventDispatcherInterface $logger = null)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function doSomething()
    {
        if ($this->eventDispatcher) {
            $this->eventDispatcher->addListener('event_name', function (EventInterface $event) {
                // ...
            });

            $this->eventDispatcher->dispatch('event_name');
        }

        // do something useful
    }
}
```

You can then pick one of the implementations of the interface to get a logger.

If you want to implement the interface, you can require this package and
implement `Psr\Log\EventDispatcherInterface` in your code. Please read the
[specification text](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-event-interface.md)
for details.