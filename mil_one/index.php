<?php
include './data/data.php';

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

        <?php
        foreach( $database as $value )
        {
        echo "<div class='thumb'>" . 
                "<div class='img_cont'>" . 
                    "<img src=" . $value["poster"] . " >" .
             "</div>" . 
            "<div class='text_cont'>" . 
                "<h3>" . $value["title"] . "</h3>" . 
                "<p>" . $value["author"] . "</p>" . 
            "</div>" .
        "</div>";
        }
        ?>

    </div>
</main>

</body>
</html>