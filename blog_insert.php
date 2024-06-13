<?php
include "connect.php";
$sql= "INSERT INTO blog (title, content, poster, dmy)
VALUES('$_POST[title]', '$_POST[content]', '$_POST[poster]',
now())"; // blog คือชื่อตำรำงที่จะบันทึก
if($conn->query($sql) === TRUE) {
echo"New record created successfully";
} else{
echo"Error: ". $sql. "<br>". $conn->error;
}
$conn->close();
?>