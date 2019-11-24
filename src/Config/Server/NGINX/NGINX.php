<?php


namespace  AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;

use AnthraxisBR\FastWorkEcosystem\Config\Config;

/**
 * Class NGINX
 * @package AnthraxisBR\FastWorkEcosystem\Config\Server
 */
class NGINX extends Config
{

    public $port = 8000;
    public $host = '127.0.0.1';
    public $environment = '';
    public $hostname = ('');
    public $alias = '';
    public $redirectToHttps = '';
    public $ssl = false;
    public $ssl_cert_file = '';
    public $ssl_key_file = '';
    public $http2 = false;


    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort(int $port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment(string $environment): void
    {
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getHostname(): string
    {
        return $this->hostname;
    }

    /**
     * @param string $hostname
     */
    public function setHostname(string $hostname): void
    {
        $this->hostname = $hostname;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getRedirectToHttps(): string
    {
        return $this->redirectToHttps;
    }

    /**
     * @param string $redirectToHttps
     */
    public function setRedirectToHttps(string $redirectToHttps): void
    {
        $this->redirectToHttps = $redirectToHttps;
    }

    /**
     * @return bool
     */
    public function isSsl(): bool
    {
        return $this->ssl;
    }

    /**
     * @param bool $ssl
     */
    public function setSsl(bool $ssl): void
    {
        $this->ssl = $ssl;
    }

    /**
     * @return string
     */
    public function getSslCertFile(): string
    {
        return $this->ssl_cert_file;
    }

    /**
     * @param string $ssl_cert_file
     */
    public function setSslCertFile(string $ssl_cert_file): void
    {
        $this->ssl_cert_file = $ssl_cert_file;
    }

    /**
     * @return string
     */
    public function getSslKeyFile(): string
    {
        return $this->ssl_key_file;
    }

    /**
     * @param string $ssl_key_file
     */
    public function setSslKeyFile(string $ssl_key_file): void
    {
        $this->ssl_key_file = $ssl_key_file;
    }

    /**
     * @return bool
     */
    public function isHttp2(): bool
    {
        return $this->http2;
    }

    /**
     * @param bool $http2
     */
    public function setHttp2(bool $http2): void
    {
        $this->http2 = $http2;
    }


}