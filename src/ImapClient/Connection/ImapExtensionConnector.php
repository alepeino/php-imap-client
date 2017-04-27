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

class ImapExtensionConnector implements Connector
{
    private $imap;

    private $config;

    public function __construct(ConnectorConfig $config)
    {
        $this->config = $config;
    }

    public function open()
    {

    }

}
