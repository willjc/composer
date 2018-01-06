<?php
/**
 * Created by PhpStorm.
 * User: wangliansheng
 * Date: 2018/1/6
 * Time: 下午5:17
 */
require_once './vendor/autoload.php';
$work=new Workerman\Worker("http://0.0.0.0:2333");
$work->onMessage=function($connection,$data){

    $connection->send("helloworld");
};
\Workerman\Worker::runAll();

