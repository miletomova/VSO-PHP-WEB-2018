<?php 

$str = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime consequuntur eaque ipsa ducimus perspiciatis impedit nulla explicabo corporis. Fugiat ratione beatae quisquam architecto expedita nostrum, nihil officiis! Numquam, praesentium, tenetur!';

preg_match_all('/\w+/', $str, $res);

var_dump($res);