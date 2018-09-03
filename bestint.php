<?php
$arr_num=array(3,4,5,6,3,2);
$max_value=$arr_num[0];
foreach ($arr_num as $value)
  if($max_value<$value){
    $max_value=$num;
  }

echo $max_value;
?>
