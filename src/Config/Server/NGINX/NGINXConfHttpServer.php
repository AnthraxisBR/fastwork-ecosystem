<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\NGINX\Server;


class NGINXConfHttpServer
{

    private $listen = '80';

    private $server_name = 'localhost';

    private $access_log = 'logs/domain1.access.log  main';

    private $root = 'html';

    private $location = [];

    public function __construct()
    {
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
        return $this->server_name;
    }

    /**
     * @param string $server_name
     */
    public function setServerName(string $server_name): void
    {
        $this->server_name = $server_name;
    }

    /**
     * @return string
     */
    public function getAccessLog(): string
    {
        return $this->access_log;
    }

    /**
     * @param string $access_log
     */
    public function setAccessLog(string $access_log): void
    {
        $this->access_log = $access_log;
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
     * @param array $location
     */
    public function setLocation(array $location): void
    {
        $this->location = $location;
    }


}