<?php
/**
 * Created by PhpStorm.
 * User: wangliansheng
 * Date: 2018/1/6
 * Time: 下午11:54
 */
use Workerman\Worker;
use Workerman\WebServer;
$webserver=new WebServer("http://0.0.0.0:1231");
$webserver->addRoot('ceshi.php',__DIR__.'/web');
//Worker::runAll();