<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device
width, initial-scale=1.0">
 <title>Blog Form</title>
 </head>
 <body>
 <?php
 include "connect.php";
 $sql = "SELECT * FROM blog";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc()
 ?>
 <form action="blog_update.php" method="post">
 <input type="hidden" name="id"
 value="<?php echo $row['id'] ?>" />
 ชื่อเรื่อง : <input type="text" name="title"
 value="<?php echo $row['title']; ?>" /> <br/>
 เนื้อหา : <textarea name="content"> <?php echo
 $row['content']; ?> </textarea > <br/>
 ผู้โพสต์ : <input type="text"
 name="poster" value="<?php echo $row['poster']; 
?>" /> <br/>
 <input type="submit" value="แก้ไขข้อมูล"/>
 </form> 
</body>
 </html>