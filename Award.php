<?php

/**
 * Created by PhpStorm.
 * User: wejoy-a
 * Date: 2016/6/28
 * Time: 11:54
 */
class Award
{
    var $awards = array();

    function addAwards($awardsName, $amount) {
        for($i = 0; $i < $amount ; $i++) {
            array_push($this->awards, $awardsName);
        }
    }
}