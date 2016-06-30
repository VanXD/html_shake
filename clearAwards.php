<?php
/**
 * Created by PhpStorm.
 * User: wejoy-a
 * Date: 2016/6/28
 * Time: 15:42
 */

include_once "db/DbUtil.php";
$sql = "DELETE FROM awards";

mysqli_query($dbHandle, $sql);
echo "success";
?>