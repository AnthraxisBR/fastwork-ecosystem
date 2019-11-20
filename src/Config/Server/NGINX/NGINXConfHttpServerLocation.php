<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\NGINX\Server;


class NGINXConfHttpServerLocation
{

    private $location = '^/(images|javascript|js|css|flash|media|static)/';

    private $fastcgi_pass = '127.0.0.1:1025';

    private $root = '/var/www/virtual/big.server.com/htdocs';

    private $expires = '30d';

    private $proxy_pass = 'http://127.0.0.1:8080';

}