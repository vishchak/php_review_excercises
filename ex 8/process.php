<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['toppings']) && is_array($_POST['toppings'])) {
        $selectedFruits = $_POST['toppings'];
        echo "Selected toppings: " . implode(", ", $selectedFruits);
    } else {
        echo "No toppings selected.";
    }
} else {
    echo "Form not submitted.";
}
?>
