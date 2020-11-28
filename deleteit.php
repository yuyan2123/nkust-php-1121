<?php
    require("dbinfo.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM news WHERE id='$id'";
    $conn->query($sql);
    $conn->close();
    header("Location: /nkust-php-1121");
?>