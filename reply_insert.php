<?php
include "connect.php";
$sql = "INSERT INTO comment (reply, user, ref)
VALUES ('$_POST[reply]', '$_POST[user]', '$_GET[ref]') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .  $conn->error;
}

$conn->close();
?>