<?php
include_once "db/DbUtil.php";
include_once "Award.php";

$rand = rand(1, 100);
if($rand > 80) {
    $sql = "SELECT * FROM awards WHERE amount >0 ORDER BY RAND() LIMIT 1";
    $decreaseAmountSQL = "UPDATE awards SET amount = amount - 1 WHERE name = '%s'";
    $name = "";
    $result = mysqli_query($dbHandle, $sql);
    while($row = mysqli_fetch_array($result)) {
        $name = $row["name"];
        mysqli_query($dbHandle, sprintf($decreaseAmountSQL, $name));
    }
    echo $name;
} else {
    echo "";
}
?>