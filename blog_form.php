<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<title>Blog Form</title>
</head>
<body>
<form action="blog_insert.php"method="post">
ชื่อเรื่อง : <input type="text"name="title"/><br/>
เนื้อหำ : <textarea name="content"></textarea><br/>
ผู้โพสต์ : <input type="text"name="poster"/><br/>
<input type="submit"value="ส่งข้อมูล"/>
</form>
</body>
</html>