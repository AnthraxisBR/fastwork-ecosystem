<?php

namespace AnthraxisBR\Tests;


class TestCase extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $dotenv = \Dotenv\Dotenv::create(__DIR__,'/../.env');
        $dotenv->load();

    }
}