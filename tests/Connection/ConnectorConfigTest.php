<?php

namespace SSilence\ImapClient\Tests\Connection;

use PHPUnit\Framework\TestCase;
use SSilence\ImapClient\Connection\ConnectorConfig;

class ConnectorConfigTest extends TestCase
{
    public function testHostSetterWithDomainName()
    {
        $config = new ConnectorConfig();
        $config->setHost('example.com');

        $this->assertEquals('example.com', $config['host']);
    }

    public function testHostSetterWithIpAddress()
    {
        $config = new ConnectorConfig();
        $config->setHost('127.0.0.1');

        $this->assertEquals('[127.0.0.1]', $config['host']);
    }

    public function testPortSetter()
    {
        $config = new ConnectorConfig();
        $config->setPort(999);

        $this->assertEquals(999, $config['port']);
    }

    public function testUsernameSetter()
    {
        $config = new ConnectorConfig();
        $config->setUsername('user');

        $this->assertEquals('user', $config['username']);
    }

    public function testPasswordSetter()
    {
        $config = new ConnectorConfig();
        $config->setPassword('password');

        $this->assertEquals('password', $config['password']);
    }

    public function testFlagsSetter()
    {
        $config = new ConnectorConfig();
        $config->setFlags([1, 2, 3]);

        $this->assertEquals([1, 2, 3], $config['flags']);
    }

    public function testOptionsSetter()
    {
        $config = new ConnectorConfig();
        $config->setOptions(64);

        $this->assertEquals(64, $config['options']);
    }
}
