<?php
/**
 * Copyright (C) 2016-2017  SSilence
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

namespace SSilence\ImapClient\Connection;

/**
 * Class ConnectorConfig. Holds config data for the connection.
 *
 * @package    SSilence\ImapClient
 * @copyright  Copyright (c) Tobias Zeising (http://www.aditu.de)
 * @author     Tobias Zeising <tobias.zeising@aditu.de>
 */
class ConnectorConfig implements \ArrayAccess
{
    private $data;

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * Set the host.
     *
     * @param string $host The domain name or IP address of the server.
     * @return $this
     */
    public function setHost($host)
    {
        $this->data['host'] = $this->parseHost($host);

        return $this;
    }

    /**
     * Set the port.
     *
     * @param integer $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->data['port'] = $port;

        return $this;
    }

    /**
     * Set the username.
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->data['username'] = $username;

        return $this;
    }

    /**
     * Set the password.
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->data['password'] = $password;

        return $this;
    }

    /**
     * Set the flags.
     *
     * @param array $flags An array of flags.
     * @return $this
     */
    public function setFlags($flags)
    {
        $this->data['flags'] = $flags;

        return $this;
    }

    /**
     * Set the options.
     *
     * @param integer $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->data['options'] = $options;

        return $this;
    }

    private function parseHost($host)
    {
        if ($ip = filter_var($host, FILTER_VALIDATE_IP)) {
            return "[$ip]";
        }

        return $host;
    }

    public function offsetExists($offset)
    {
        return isset($this->data[$offset]);
    }

    public function offsetGet($offset)
    {
        if (isset($this->data[$offset])) {
            return $this->data[$offset];
        }
    }

    public function offsetSet($offset, $value)
    {
        $this->data[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }
}
