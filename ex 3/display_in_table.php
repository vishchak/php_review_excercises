<?php
$keysValues = [
    ['A', '1000'],
    ['B', '1200'],
    ['C', '1400']
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display key-value in a table</title>
</head>
<body>
<h1>Keys - Values</h1>
<?php
foreach ($keysValues as $row) {
    echo 'Salary of Mr ';
    foreach ($row as $value) {
        echo substr($value, 0, 1) . ' is ' . substr($value, 1);
    }
    echo "$ <br>";
}
?>
</body>
</html>
