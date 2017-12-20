<?php
include 'connection.php';

$email=$_GET['mail'];
$username=$_GET['usernameR'];
$password=$_GET['passwordR'];

$sql = "INSERT INTO user (Nickname, Password, Email)
VALUES ('$username', '$password', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>