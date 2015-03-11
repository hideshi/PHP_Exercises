<?php

$last = 100000;
$search = range(2, $last);
$result = array();
while(true) { 
    $num = array_shift($search);
    if($num > (sqrt($last))) {
        $result = array_merge($result, $search);
        break;
    }
    $f = 'return ($n % ' . $num .') != 0;';
    $search = array_filter($search, create_function('$n', $f));
    $result[] = $num;
}
print_r($result);
