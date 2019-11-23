<?php


namespace AnthraxisBR\Test\Config\Server\NGINX;


use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServer;
use AnthraxisBR\Tests\TestCase;

class NGINXConfHttpServerTest extends TestCase
{


    private $instance;

    public function setUp(): void
    {

        parent::setUp();

        $this->setInstance(new NGINXConfHttpServer('/', '/var/www/html'));
    }

    public function testSetServerName()
    {
        ddd($this->getInstance()->__toString());
    }

    public function testSetRoot()
    {

    }

    public function testGetAccessLog()
    {

    }

    public function testSetAccessLog()
    {

    }

    public function test__construct()
    {

    }

    public function testGetRoot()
    {

    }

    public function testSetListen()
    {

    }

    public function testSetLocation()
    {

    }

    public function testGetListen()
    {

    }

    public function testGetServerName()
    {

    }

    public function testGetLocation()
    {

    }
}
