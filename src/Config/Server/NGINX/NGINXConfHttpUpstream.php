<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\NGINX\Server;


class NGINXConfHttpUpstream
{

    private $servers = ['127.0.0.3:8000 weight=5'];

    public function __construct(string $server)
    {
        $this->pushServer($server);
    }

    public function __toString() : string
    {
        return "upstream \n{ {$this->concatServers()}\n }";
    }

    public function concatServers() : string
    {
        $str = '';
        foreach ($this->getServers() as $server){
            $str .= "{$server};\n";
        }
        return $str;
    }

    public function pushServer($server) : void
    {
        $this->servers[] = $server;
    }

    /**
     * @return array
     */
    public function getServers(): array
    {
        return $this->servers;
    }

    /**
     * @param array $servers
     */
    public function setServers(array $servers): void
    {
        $this->servers = $servers;
    }


}