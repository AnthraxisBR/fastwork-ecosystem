<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;


class NGINXConfHttpServer
{

    private $listen;

    private $serverName;

    private $root;

    private $accessLog;

    private $location;

    public function __construct($listen, $serverName, $root = null, $accessLog = null, NGINXConfHttpServerLocation $location = null)
    {
        $this->setListen($listen);
        $this->setServerName($serverName);
        $this->setAccessLog($accessLog);
        $this->setRoot($root);
        $this->setLocation($location);
    }

    /**
     * @return string
     */
    public function getListen(): string
    {
        return $this->listen;
    }

    /**
     * @param string $listen
     */
    public function setListen(string $listen): void
    {
        $this->listen = $listen;
    }

    /**
     * @return string
     */
    public function getServerName(): string
    {
        return $this->serverName;
    }

    /**
     * @param string $serverName
     */
    public function setServerName(string $serverName): void
    {
        $this->serverName = $serverName;
    }

    /**
     * @return string
     */
    public function getAccessLog(): string
    {
        return $this->accessLog;
    }

    /**
     * @param string $access_log
     */
    public function setAccessLog(string $access_log): void
    {
        $this->accessLog = $access_log;
    }

    /**
     * @return string
     */
    public function getRoot(): string
    {
        return $this->root;
    }

    /**
     * @param string $root
     */
    public function setRoot(string $root): void
    {
        $this->root = $root;
    }

    /**
     * @return array
     */
    public function getLocation(): array
    {
        return $this->location;
    }

    /**
     * @param NGINXConfHttpServerLocation $location
     */
    public function setLocation(NGINXConfHttpServerLocation $location): void
    {
        $this->location = $location;
    }


}