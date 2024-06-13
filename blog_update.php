<?php
include "connect.php";
$sql= "UPDATE blog SET title='$_POST[title]', content='$_POST[content]' WHERE id=$_POST[id]";
if($conn->query($sql) === TRUE) {
echo"Record updated successfully";
echo"Record deleted successfully";
header( "location: blog_view.php");
exit(0);
} else{
echo "Error updating record: ". $conn->error;
}
$conn->close();
?>