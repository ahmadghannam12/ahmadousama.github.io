<?php
$db_SERVER = "localhost";
$db_USER = "root";
$db_PASSWORD = "";
$db_DBNAME =  "orders";

$con = mysqli_connect($db_SERVER, $db_USER, $db_PASSWORD, $db_DBNAME);

if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    $result = $con->query($sql);

    if ($result === TRUE) {
        echo "Message has been successfully saved in the database.";
        header("location: samsung.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} else {
    echo 'Error: Invalid request method.';
}

mysqli_close($con);
?>
