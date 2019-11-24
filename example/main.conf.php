<?php

include "../vendor/autoload.php";

use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttp;
use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServer;
use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServerLocation;
use \AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpUpstream;


$http = new NGINXConfHttp(['index.php']);

$serverExampleCom = new NGINXConfHttpServer('80','example.com','/var/www/html/example', 'logs/example.com.access.log ');
$serverExampleComLocation = new NGINXConfHttpServerLocation('/');
$serverExampleComLocation->setProxyPass('http://127.0.0.1:8000');
$serverExampleCom->setLocation($serverExampleComLocation);


$serverSecondExampleCom = new NGINXConfHttpServer('80','second.example.com','/var/www/html/example', 'logs/second.example.com.access.log ');
$serverSecondExampleComLocation = new NGINXConfHttpServerLocation('~ ^/(images|javascript|js|css|flash|media|static)/', 'images');
$serverSecondExampleCom->setLocation($serverSecondExampleComLocation);

$http->pushServer($serverSecondExampleCom);
$http->pushServer($serverExampleCom);

echo $http;
