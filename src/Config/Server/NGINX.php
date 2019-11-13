<?php


namespace  AnthraxisBR\FastWorkEcosystem\Config\Server;

use AnthraxisBR\FastWorkEcosystem\Config\Config;

/**
 * Class NGINX
 * @package AnthraxisBR\FastWorkEcosystem\Config\Server
 */
class NGINX extends Config
{

    public $port = 8000;
    public $host = '127.0.0.1';
    public $environment = '';
    public $hostname = ('');
    public $alias = '';
    public $redirectToHttps = '';
    public $ssl = false;
    public $ssl_cert_file = '';
    public $ssl_key_file = '';
    public $http2 = false;
}