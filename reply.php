<!DOCTYPE html>
<html lang="en">
<head>
    <mate charset="UTF-8">
    <mate name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply</title>
</head>
<body>

    <?php
        include "connect.php";
        $sql = "SELECT * FROM blog WHERE id='$_GET[ref]' ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "<h2> $row[title] </h2>";
        echo "<p> $row[content] </p>";
        echo "<p> $row[poster] date: $row[dmy]</p>";
        echo "<hr/>";
    ?>
    <?php
        $sql12 = "SELECT * FROM comment WHERE ref='$row[id]' "; //หรือ $_GET[ref] ก็ได้
        $result2 = $conn->qurey($sql2);
        while($row2 = $result2->fetch_assoc()){
            echo "<h4> $row2[reply] </h4>";
            echo "<p> $row2[user] </p>";
            echo "<hr />";
        }
    ?>

    <form action="reply_insert.php?ref=<?php echo $row['id'] ?>" method="post">
        ข้อความ <textarea name="comment" rows="5" cols="30"></textarea> <br/>
        ผู้ตอบ <input type="text" name="user" /> <br/>
        <input type="submit" value="SEND" />
</form>
</body>
</html>