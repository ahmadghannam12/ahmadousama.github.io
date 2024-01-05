<?php
$db_SERVER = "localhost";
$db_USER = "root";
$db_PASSWORD = "";
$db_DBNAME =  "orders";

$con = mysqli_connect($db_SERVER, $db_USER, $db_PASSWORD, $db_DBNAME);

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

// Check if the keys exist in the $_POST array
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $color = mysqli_real_escape_string($con, $_POST['color']);
    $type = mysqli_real_escape_string($con, $_POST['type']);

    $sql = "INSERT INTO orders (product, color, type) VALUES ('$product', '$color', '$type')";

    if (mysqli_query($con, $sql)) {
        echo "Order has been successfully saved in the database.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} else {
    echo 'error adding values' . $con->error;
}

mysqli_close($con);
?>
