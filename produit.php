<?php
require "db.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_GET["cat"]; ?></title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/js.js"></script>


</head>

<body table_produit=<?= $_GET["cat"] ?>>
    <?php
       require("nav.php");
    ?>
    <section class="content">
        <div class="aside">
            <ul>
                <li><a class="page" href="produit.php?cat=rock">Rock</a></li>
                <li><a class="page" href="produit.php?cat=opera">Opera</a></li>
                <li><a class="page" href="produit.php?cat=classic">Classical</a></li>
            </ul>
        </div>
        <style>
            .counter i {
                font-size: 2em;
                cursor: pointer;
            }
            .row{
                display:flex;
                flex-wrap:wrap;
            }
        </style>
        <div class="description">
            
        <div class="row">
           <?php
           include "functions/dispSongs.php";
           dispSongs($_GET["cat"]);
           ?>
        </div>
    </section>


    <?php require("footer.php"); ?>
</body>

</html>