<?php
include './data/data.php';
echo $database[0]["title"];
/* var_dump($database) */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dischi php</title>
</head>
<body>

<nav><h1>navigazione</h1></nav>
<main>
    <div class="contain">
        <div class="thumb">
            <div class="img_cont">
                <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg" alt="">
            </div>
            <div class="text_cont">
                <h3>album</h3>
                <p>Author</p>
            </div>
        </div>
    </div>
</main>

</body>
</html>