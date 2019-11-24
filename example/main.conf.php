<?php

include "../vendor/autoload.php";

use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttp;
use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServer;
use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServerLocation;

class ExampleConf extends \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConf {
    public function __construct($index = ['index.html', 'index.php', 'index.htm'])
    {
        parent::__construct(
            'example.com',
            new NGINXConfHttp(
                ['index.php'],
                new NGINXConfHttpServer(
                    '80',
                    'example.com',
                    '/var/www/html',
                    'logs/example.com.access.log',
                    new NGINXConfHttpServerLocation(
                        '/',
                            '/example/'
                    )
                )
            )
        );
    }
}

echo ( new ExampleConf())->__toString();
