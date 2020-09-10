<?php
    require("config/db.php");

    $query = "SELECT * FROM posts";

    // the connection below comes from the config/db.php file
    // Get result
    $result = mysqli_query($conn, $query);

    // fetch data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    var_dump($posts);

    // Free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>
<body>
    
</body>
</html>