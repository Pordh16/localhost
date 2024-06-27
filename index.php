<?php
    ob_start();
    session_start();

    if (!isset($_SESSION['loggedin'])){
        header('Location: login.php');
        exit;
    }

    echo "Welcome to Website";
    echo "<p> $_SESSION[email] </p>";
    echo "<p><a href='logout.php> Logout </a> </p>";

    if (isset($_SESSION['Loggedin'])){
        echo "<a href= 'blog_view.php'> แสดง Blogh </a> ";
        echo "<a href= 'blog_form.php'> เพิ่ม Blogh </a> ";
    }
?>