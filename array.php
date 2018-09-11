<?php
$array = array("a" => "sA", "b" => "123456", "c" => "AZ", "d" => "gG");
$array = array_change_key_case($array, CASE_UPPER);//把关联数组的键变为大写或者小写
foreach ($array as $k => $v) {
    echo $k . '<br>';
}
?>