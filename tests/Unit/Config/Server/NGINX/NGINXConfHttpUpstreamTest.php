<?php

namespace AnthraxisBR\Test\Config\Server\NGINX;


use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpUpstream;
use AnthraxisBR\Tests\Unit\Config\Server\NGINX\NGINXTest;

class NGINXConfHttpUpstreamTest extends NGINXTest
{

    private $instance;

    public function setUp(): void
    {
        parent::setUp();

        $this->instance = new NGINXConfHttpUpstream('test_upstream');
    }

    public function testPushServer()
    {
        $this->instance->pushServer('127.0.0.1:8000');

        $this->assertEquals(1, count($this->instance->getServers()));
    }

    public function testConcatServers()
    {
        ddd('asdasd');
        $this->instance->pushServer('127.0.0.1:8000');

        $this->assertEquals('upstream test_upstream 
{ 
    127.0.0.1:8000;
}'                          ,$this->instance->__toString());
    }

    public function testSetServers()
    {

        $this->instance->setServers(['127.0.0.1:8000']);

        $this->assertEquals(1, count($this->instance->getServers()));
    }

    public function testGetServers()
    {
        $this->instance->pushServer('127.0.0.1:8000');

        $this->assertEquals(1, count($this->instance->getServers()));
    }
}
