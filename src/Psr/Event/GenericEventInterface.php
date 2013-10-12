<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psr\Event\EventDispatcher;

/**
 * Event encapsulation class.
 *
 * Encapsulates events thus decoupling the observer from the subject they encapsulate.
 *
 * @author Drak <drak@zikula.org>
 */
interface GenericEventInterface extends EventInterface, \ArrayAccess, \IteratorAggregate
{

    /**
     * Encapsulate an event with $subject and $args.
     *
     * @param mixed $subject   The subject of the event, usually an object.
     * @param array $arguments Arguments to store in the event.
     */
    public function __construct($subject = null, array $arguments = array());

    /**
     * Getter for subject property.
     *
     * @return mixed $subject The observer subject.
     */
    public function getSubject();

    /**
     * Get argument by key.
     *
     * @param string $key Key.
     *
     * @throws \InvalidArgumentException If key is not found.
     *
     * @return mixed Contents of array key.
     */
    public function getArgument($key);

    /**
     * Add argument to event.
     *
     * @param string $key   Argument name.
     * @param mixed  $value Value.
     *
     * @return GenericEvent
     */
    public function setArgument($key, $value);

    /**
     * Getter for all arguments.
     *
     * @return array
     */
    public function getArguments();

    /**
     * Set args property.
     *
     * @param array $args Arguments.
     *
     * @return GenericEvent
     */
    public function setArguments(array $args = array());

    /**
     * Has argument.
     *
     * @param string $key Key of arguments array.
     *
     * @return boolean
     */
    public function hasArgument($key);

}