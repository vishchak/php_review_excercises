<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');

changeRegex($color, 'strtolower');
print_r($color);

changeRegex($color, 'strtoupper');
print_r($color);

function changeRegex(&$array, $function)
{
    foreach ($array as $key => $value) {
        if (!empty($value)) {
            $array[$key] = call_user_func($function, $value);
        }
    }
}

?>
