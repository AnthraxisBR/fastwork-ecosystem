<?php


class Env
{

    public function __construct($key, $default = null)
    {
        $this->value = getenv($key) || $default;
    }
}