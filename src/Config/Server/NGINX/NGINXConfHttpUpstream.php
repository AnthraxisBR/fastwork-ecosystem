<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;


class NGINXConfHttpUpstream
{

    private $servers = [];

    private $upstreamName = '';

    public function __construct(string $upstreamName)
    {
        $this->setUpstreamName($upstreamName);
    }

    public function __toString() : string
    {
        return "upstream {$this->getUpstreamName()} \n{ {$this->concatServers()}}";
    }

    public function concatServers() : string
    {
        $str = "\n";
        $c = 0;
        foreach ($this->getServers() as $server){
            $str .= "    {$server};";
            if(count($this->getServers()) >= $c){
                $str .= "\n";
            }
        }
        return $str;
    }

    /**
     * @return string
     */
    public function getUpstreamName(): string
    {
        return $this->upstreamName;
    }

    /**
     * @param string $upstreamName
     */
    public function setUpstreamName(string $upstreamName): void
    {
        $this->upstreamName = $upstreamName;
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