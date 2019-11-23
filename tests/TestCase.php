<?php

namespace AnthraxisBR\Tests;


class TestCase extends \PHPUnit\Framework\TestCase
{
    private $instance;

    public function setUp(): void
    {
        parent::setUp();

        $dotenv = \Dotenv\Dotenv::create(__DIR__,'/../.env');
        $dotenv->load();
    }

    /**
     * @return mixed
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param mixed $instance
     */
    public function setInstance($instance): void
    {
        $this->instance = $instance;
    }


}