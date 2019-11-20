<?php


use AnthraxisBR\FastWorkEcosystem\Helpers\Env;
use AnthraxisBR\Tests\TestCase;


class EnvTest extends TestCase
{

    public function testClassF(){
        echo new Env('NGINX_HOSTNAME','127.0.0.2');
    }
}