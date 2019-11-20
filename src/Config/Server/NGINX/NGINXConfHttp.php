<?php


namespace AnthraxisBR\FastWorkEcosystem\Config\NGINX\Server;


class NGINXConfHttp
{

    private $include = ['conf/mime.types','/etc/nginx/proxy.conf','/etc/nginx/fastcgi.conf'];

    private $default_type = 'application/octet-stream';

    private $index = ['index.html', 'index.htm', 'index.php'];

    private $log_format = 'main \'$remote_addr - $remote_user [$time_local]  $status \'
    \'"$request" $body_bytes_sent "$http_referer" \'
    \'"$http_user_agent" "$http_x_forwarded_for"\'';

    private $access_log = 'logs/access.log  main';

    private $sendfile = 'on';

    private $tcp_nopush = 'on';

    private $server_names_hash_bucket_size = 128;


}