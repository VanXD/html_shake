<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * Created by PhpStorm.
 * User: wejoy-a
 * Date: 2016/6/28
 * Time: 15:43
 */
include_once "Award.php";
include_once "db/DbUtil.php";
$insertSQL = "INSERT INTO awards (name, amount) VALUES ('%s', %d)";

$awardsArray = $_GET["awards"];
$amountArray = $_GET["amount"];
for($i = 0; $i < sizeof($awardsArray) ; $i++) {
    mysqli_query($dbHandle, sprintf($insertSQL, urldecode($awardsArray[$i]), $amountArray[$i]));
}

echo "success";
?>