<?php
$redis = new Redis();
$redis->connect('10.10.10.4', 6379);
$redis->auth('123456');
echo "Connection to server successfully";
//查看服务是否运行
try {
    echo "Server is running: " . $redis->ping();
} catch (RedisException $e) {
    echo $e->getTraceAsString();
}