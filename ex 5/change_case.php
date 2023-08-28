<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');

changeRegex($color, 'strtolower');
print_r($color);

echo '<br>';

changeRegex($color, 'strtoupper');
print_r($color);

function changeRegex($array, $function)
{
    foreach ($array as $key => $value) {
        if (!empty($value)) {
            $array[$key] = $function($value);
        }
    }
}

?>
