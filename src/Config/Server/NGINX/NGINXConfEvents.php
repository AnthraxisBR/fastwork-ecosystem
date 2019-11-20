<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\NGINX\Server;


class NGINXConfEvents
{

    private $worker_connection = 1024;

    /**
     * @return int
     */
    public function getWorkerConnection(): int
    {
        return $this->worker_connection;
    }

    /**
     * @param int $worker_connection
     */
    public function setWorkerConnection(int $worker_connection): void
    {
        $this->worker_connection = $worker_connection;
    }


}