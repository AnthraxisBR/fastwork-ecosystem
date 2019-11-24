<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;


use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttpServer;

class NGINXConfHttpServerLocation extends NGINXConfHttpServer
{

    private $location;

    private $root;

    private $fastcgiPass;

    private $expires;

    private $proxyPass;

    private $caseSensitive = true;

    public function __construct($location, $root = null, $fastcgiPass = null, $expires = null, $proxyPass = null)
    {

        is_null($location) ?: $this->setLocation($location);
        is_null($root) ?: $this->setRoot($root);
        is_null($fastcgiPass) ?: $this->setFastcgiPass($fastcgiPass);
        is_null($expires) ?: $this->setExpires($expires);
        is_null($proxyPass) ?: $this->setProxyPass($proxyPass);

    }

    public function __toString() : string
    {
        $string = "    location {$this->getLocation()} {\n";
        if(!is_null($this->getRoot())) {
            $string .= "            root {$this->getRoot()};\n";
        }
        if(!is_null($this->getExpires())){
            $string .= "            expires {$this->getExpires()};\n";
        }
        if(!is_null($this->getProxyPass())){
            $string .= "            proxy_pass {$this->getProxyPass()};\n";
        }
        $string .= "        }\n";
        return $string;
    }

    private function isRegularExpression()
    {
        try {
            preg_match($this->getLocation(), '');
        }catch (\Exception $e){
            return false;
        }
    }

    public function setCaseInsensitiveRegex() : void
    {
        $this->setCaseSensitive(false);
    }

    /**
     * @return bool
     */
    public function isCaseSensitive(): bool
    {
        return $this->caseSensitive;
    }

    /**
     * @param bool $caseSensitive
     */
    public function setCaseSensitive(bool $caseSensitive): void
    {
        $this->caseSensitive = $caseSensitive;
    }


    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getFastcgiPass()
    {
        return $this->fastcgiPass;
    }

    /**
     * @param mixed $fastcgiPass
     */
    public function setFastcgiPass($fastcgiPass): void
    {
        $this->fastcgiPass = $fastcgiPass;
    }

    /**
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param mixed $root
     */
    public function setRoot($root): void
    {
        $this->root = $root;
    }

    /**
     * @return mixed
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param mixed $expires
     */
    public function setExpires($expires): void
    {
        $this->expires = $expires;
    }

    /**
     * @return mixed
     */
    public function getProxyPass()
    {
        return $this->proxyPass;
    }

    /**
     * @param mixed $proxyPass
     */
    public function setProxyPass($proxyPass): void
    {
        $this->proxyPass = $proxyPass;
    }

}