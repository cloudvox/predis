<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Connection;

/**
 * Interface for classes providing their own logic for connection parameters.
 *
 * @author Daniele Alessandri <suppakilla@gmail.com>
 */
interface ParametersInterface
{
    /**
     * Checks if the specified parameters is set.
     *
     * @param string $property Name of the property.
     * @return Boolean
     */
    public function __isset($parameter);

    /**
     * Returns the value of the specified parameter.
     *
     * @param string $parameter Name of the parameter.
     * @return mixed
     */
    public function __get($parameter);

    /**
     * Returns an array representation of the connection parameters.
     *
     * @return array
     */
    public function toArray();
}