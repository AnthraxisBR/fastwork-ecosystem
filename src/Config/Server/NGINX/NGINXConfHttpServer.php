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
        is_null($accessLog) ?: $this->setAccessLog($accessLog);
        is_null($root) ?: $this->setRoot($root);
        is_null($location) ?: $this->setLocation($location);
    }

    public function __toString() : string
    {
        $string = "    server {\n";
        $string .= "        listen {$this->getListen()};\n";
        $string .= "        server_name {$this->getServerName()};\n";
        if(!is_null($this->getAccessLog())){
            $string .= "        access_log {$this->getAccessLog()};\n";
        }
        if(!is_null($this->getRoot())){
            $string .= "        root {$this->getRoot()};\n";
        }
        if(!is_null($this->getLocation())){
            $string .= "    {$this->getLocation()}";
        }
        $string .= "    }\n";
        return $string;
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
    public function getAccessLog()
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
    public function getRoot()
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
    public function getLocation()
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