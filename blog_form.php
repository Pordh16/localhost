<?php
    ob_start();
    session_start();
    echo "<h3> Logged : $_SEEION[email] </h3>";
    if (isset($_SESSIO['loggedin'])) {
        echo "<p>";
        echo "<a href='blog_view.php'> แสดง Blog </a>";
        echo "<a href='blog_form.php'> เพิ่ม Blog </a>";
        echo "<a href='logout.php'> logout </a>";
        echo "</p>";
    }
?>
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
        ผู้โพสต์ : <input type="text"name="poster" value="<?php echo $_SESSION['email'] ?>"/><br/>
        <input type="submit"value="ส่งข้อมูล"/>
    </form>
</body>
</html>