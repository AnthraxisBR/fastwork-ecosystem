<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;


use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServer;
use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpUpstream;

class NGINXConfHttp extends NGINX
{

    private $index = [];

    private $include = [];

    private $server;

    private $upstream;

    private $defaultType;

    private $logFormat;

    private $accessLog;

    private $sendfile;

    private $tcpNopush;

    private $serverNamesHashBucketSize;

    private $servers = [];

    public function __construct($index = ['index.html', 'index.php', 'index.htm'], $include = null,  NGINXConfHttpServer $server = null, NGINXConfHttpUpstream $upstream = null, $defaultType = null, $logFormat = null, $accessLog = null, $sendfile = null, $tcpNopush = null, $serverNamesHashBucketSize = null)
    {
        $this->setIndex($index);
        is_null($include) ?: $this->setInclude($include);
        is_null($server) ?: $this->pushServer($server);
        is_null($upstream) ?: $this->setUpstream($upstream);
        is_null($defaultType) ?: $this->setDefaultType($defaultType);
        is_null($logFormat) ?: $this->setLogFormat($logFormat);
        is_null($accessLog) ?: $this->setAccessLog($accessLog);
        is_null($sendfile) ?: $this->setSendfile($sendfile);
        is_null($tcpNopush) ?: $this->setTcpNopush($tcpNopush);
        is_null($serverNamesHashBucketSize) ?: $this->setServerNamesHashBucketSize($serverNamesHashBucketSize);
    }

    public function __toString() : string
    {
        $string = "http {\n";
        foreach ($this->getInclude() as $include){
            $string .= "   {$include};\n";
        }
        if(count($this->getServers()) > 0){

            foreach ($this->getServers() as $server){
                $string .= (string) $server;
            }
        }else{
            $string .= (string) $this->getServer();
        }
        $string .= "}\n";
        return $string;
    }

    public function pushServer(NGINXConfHttpServer $server)
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

    /**
     * @return mixed
     */
    public function getUpstream()
    {
        return $this->upstream;
    }

    /**
     * @param mixed $upstream
     */
    public function setUpstream($upstream): void
    {
        $this->upstream = $upstream;
    }

    /**
     * @return mixed
     */
    public function getServer() : string
    {
        return $this->server;
    }

    /**
     * @param mixed $server
     */
    public function setServer($server): void
    {
        $this->server = $server;
    }


    /**
     * @param $include
     */
    public function pushInclude($include): void
    {
        $this->include[] = $include;
    }

    /**
     * @return array
     */
    public function getInclude(): array
    {
        return $this->include;
    }

    /**
     * @param array $include
     */
    public function setInclude(array $include): void
    {
        $this->include = $include;
    }

    /**
     * @return mixed
     */
    public function getDefaultType()
    {
        return $this->defaultType;
    }

    /**
     * @param mixed $defaultType
     */
    public function setDefaultType($defaultType): void
    {
        $this->defaultType = $defaultType;
    }

    /**
     * @param $index
     */
    public function pushIndex($index) : void
    {
        $this->index[] = $index;
    }

    /**
     * @return array
     */
    public function getIndex(): array
    {
        return $this->index;
    }

    /**
     * @param array $index
     */
    public function setIndex(array $index): void
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getLogFormat()
    {
        return $this->logFormat;
    }

    /**
     * @param mixed $logFormat
     */
    public function setLogFormat($logFormat): void
    {
        $this->logFormat = $logFormat;
    }

    /**
     * @return mixed
     */
    public function getAccessLog()
    {
        return $this->accessLog;
    }

    /**
     * @param mixed $accessLog
     */
    public function setAccessLog($accessLog): void
    {
        $this->accessLog = $accessLog;
    }

    /**
     * @return mixed
     */
    public function getSendfile()
    {
        return $this->sendfile;
    }

    /**
     * @param mixed $sendfile
     */
    public function setSendfile($sendfile): void
    {
        $this->sendfile = $sendfile;
    }

    /**
     * @return mixed
     */
    public function getTcpNopush()
    {
        return $this->tcpNopush;
    }

    /**
     * @param mixed $tcpNopush
     */
    public function setTcpNopush($tcpNopush): void
    {
        $this->tcpNopush = $tcpNopush;
    }

    /**
     * @return mixed
     */
    public function getServerNamesHashBucketSize()
    {
        return $this->serverNamesHashBucketSize;
    }

    /**
     * @param mixed $serverNamesHashBucketSize
     */
    public function setServerNamesHashBucketSize($serverNamesHashBucketSize): void
    {
        $this->serverNamesHashBucketSize = $serverNamesHashBucketSize;
    }



}