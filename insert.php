<?php
    require("dbinfo.php");
    $title = $_POST["name"];
    if (strlen($title) > 0) {
        $sql = "INSERT INTO news (title) VALUES ('$title')";
        $conn->query($sql);
    }
    $conn->close();
    header("Location: /nkust-php-1121");
?>