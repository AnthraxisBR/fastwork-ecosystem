<?php

namespace AnthraxisBR\FastWorkEcosystem\Helpers;

class Env
{

    private $value = '';

    public function __construct($key, $default = null)
    {
        $this->setValue(getenv($key) ?: $default);
    }

    public function __call($name, $arguments)
    {
        return $this->getValue();
    }

    public function __toString() : string
    {
        return $this->getValue();
    }

    /**
     * @return bool
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param bool $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }


}