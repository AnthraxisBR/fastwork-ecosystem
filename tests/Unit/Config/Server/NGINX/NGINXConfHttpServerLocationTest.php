<?php

namespace AnthraxisBR\Test\Config\Server\NGINX;

use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServerLocation;
use AnthraxisBR\Tests\TestCase;

class NGINXConfHttpServerLocationTest extends TestCase
{

    private $instance;

    public function setUp(): void
    {

        parent::setUp();

        $this->setInstance(new NGINXConfHttpServerLocation('/', '/var/www/html'));
    }

    public function testConcatServers()
    {
        ddd($this->getInstance()->__toString());
        $this->assertEquals('upstream test_upstream 
{ 
    127.0.0.1:8000;
}'                          ,$this->instance->__toString());
    }

    public function testGetExpires()
    {

    }

    public function testSetFastcgiPass()
    {

    }

    public function testGetRoot()
    {

    }

    public function test__construct()
    {

    }

    public function testGetLocation()
    {

    }

    public function testSetLocation()
    {

    }

    public function testSetRoot()
    {

    }

    public function testGetFastcgiPass()
    {

    }
}
