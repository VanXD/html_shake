<?php
/**
 * Created by PhpStorm.
 * User: wejoy-a
 * Date: 2016/6/28
 * Time: 15:57
 */

$url = "w.rdc.sae.sina.com.cn";
$username = "0wmyojl512";
$password = "yjw0iiyxhw5l435y32ww501mw0j01mwijjzh00l2";
$database = "app_xdshake";
$port = "3307";

$dbHandle = mysqli_connect($url, $username, $password, $database, $port);
mysqli_query($dbHandle, 'set names utf8');
?>