<?php

namespace AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;

use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttp;
use AnthraxisBR\Tests\TestCase;

class NGINXConfHttpTest extends TestCase
{

    private $instance;

    public function setUp(): void
    {
        parent::setUp();

        $this->setInstance(
            new NGINXConfHttp(['index.html'],
                null,
                new NGINXConfHttpServer(
                    $listen = '80',
                    $serverName = 'localhost',
                    $root = null,
                    $accessLog = null,
                    $location = new NGINXConfHttpServerLocation('/', '/var/www/html')
                )
            )
        );
    }

    public function getInstance() : NGINXConfHttp
    {
        return parent::getInstance();
    }

    public function testGetIndex()
    {

    }

    public function testGetDefaultType()
    {

    }

    public function testGetServerNamesHashBucketSize()
    {

    }

    public function testPushInclude()
    {

    }

    public function testGetTcpNopush()
    {

    }

    public function test__construct()
    {
        ddd($this->getInstance()->__toString());
    }

    public function testGetInclude()
    {

    }

    public function testSetDefaultType()
    {

    }

    public function testSetAccessLog()
    {

    }

    public function testSetIndex()
    {

    }

    public function testSetServerNamesHashBucketSize()
    {

    }

    public function testSetTcpNopush()
    {

    }

    public function testPushIndex()
    {

    }

    public function testGetLogFormat()
    {

    }

    public function testGetAccessLog()
    {

    }

    public function testGetSendfile()
    {

    }

    public function testSetInclude()
    {

    }

    public function test__toString()
    {

    }

    public function testSetLogFormat()
    {

    }

    public function testSetSendfile()
    {

    }
}
