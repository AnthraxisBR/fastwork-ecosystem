<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX;


use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINX;
use AnthraxisBR\FastWorkEcosystem\Config\Server\NGINX\NGINXConfHttp;

class NGINXConf extends NGINX
{

    private $filesFolder = '/etc/nginx/sites-available/';

    private $fileName;

    private $confHttp;

    public function __construct($fileName, NGINXConfHttp $confHttp)
    {
        $this->setFileName($fileName);
        $this->setConfHttp($confHttp);
    }

    public function __toString(): string
    {
        return (string) $this->getConfHttp();
    }

    public function generateFile($folder = null)
    {
        if(is_null($folder)){
            $folder = $this->getFilesFolder();
        }
        $file = fopen("{$folder}{$this->getFileName()}.conf", "w");
        fwrite($file, (string) $this);
        fclose($file);
    }


    public function generateAsAvailable()
    {
        $this->generateFile('/etc/nginx/sites-available/');
    }

    public function generateAsEnabled()
    {
        $this->generateFile('/etc/nginx/sites-enabled/');
    }

    /**
     * @return mixed
     */
    public function getConfHttp()
    {
        return $this->confHttp;
    }

    /**
     * @param mixed $confHttp
     */
    public function setConfHttp($confHttp): void
    {
        $this->confHttp = $confHttp;
    }

    /**
     * @return string
     */
    public function getFilesFolder(): string
    {
        return $this->filesFolder;
    }

    /**
     * @param string $filesFolder
     */
    public function setFilesFolder(string $filesFolder): void
    {
        $this->filesFolder = $filesFolder;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $file
     */
    public function setFileName($fileName): void
    {
        $this->fileName = $fileName;
    }


}