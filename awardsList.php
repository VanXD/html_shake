<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Document</title>
    <link href="css/common.css" rel="stylesheet"/>
</head>
<body>
<div class="container">
    <?php
    /**
     * Created by PhpStorm.
     * User: wejoy-a
     * Date: 2016/6/28
     * Time: 15:43
     */
    include_once "Award.php";
    include_once "db/DbUtil.php";
    $insertSQL = "SELECT * FROM awards";
    $result = mysqli_query($dbHandle, $insertSQL);
    while($row = mysqli_fetch_array($result)) {
        echo $row["name"] . "||" . $row[amount] . "<br/>";
    }
    ?>

    <button onclick="clearAwards()">清空所有奖品</button>
</div>
<div style="margin-top: 30px;" class="container">
    <div class="form-control">
        <span class="awards">特等奖</span>：
        <input type="text" class="amount" value="0">
    </div>
    <div class="form-control">
        <span class="awards">一等奖</span>：
        <input type="text" class="amount" value="0">
    </div>
    <div class="form-control">
        <span class="awards">二等奖</span>：
        <input type="text" class="amount" value="0">
    </div>
    <div class="form-control">
        <span class="awards">参与奖</span>：
        <input type="text" class="amount" value="0">
    </div>
    <div class="form-control">
        <button onclick="setAwards()">提交奖品</button>
    </div>
</div>
<script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    function clearAwards() {
        $.ajax({
            type : "GET",
            url : "clearAwards.php",
            success : function(result) {
                if(result == "success") {
                    window.location.reload();
                }
            }
        });
    }

    function setAwards() {
        var awards = [];
        var amount = [];
        $(".awards").each(function(){
            awards.push(encodeURIComponent($(this).html()));
        });
        $(".amount").each(function(){
            amount.push($(this).val());
        });

        $.ajax({
            type : "get",
            url : "http://xdshake.applinzi.com/setAwards.php",
            async : false,
            data : {
                awards : awards,
                amount : amount
            },
            success : function(result) {
                if(result == "success") {
                    window.location.href = "awardsList.php";
                }
            }
        });
    }
</script>
</body>
</html>

