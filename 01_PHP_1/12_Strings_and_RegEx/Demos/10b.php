<?php 

$str = preg_replace("/[\\\\\/+]/", ' ', '\"\1+2/3*2:2-3/4*3');

echo $str;