<?php
// $array = array("a" => "sA", "b" => "123456", "c" => "AZ", "d" => "gG");
// $array = array_change_key_case($array, CASE_UPPER);//把关联数组的键变为大写或者小写

// foreach ($array as $k => $v) {
//     echo $k . '<br>';
// }
// $sss = array_chunk($array, 2, true);
// print_r($sss);


$a = array("hebing1", "hebing2", "hebing3");
$b = array("value1", "value2", "value3");
$c = array_combine($a, $b);
print_r($c);
?>