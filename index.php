<?php


require "db.php";
if(isset($_GET["deconnexion"])){
    $_SESSION["user"]=null;
    setcookie("id","",time() - 3600,"/");
    setcookie("user","",time() - 3600,"/");
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acceuil</title>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/js.js"></script>
    </head>

    <body style="height:100vh">
        <?php require("nav.php"); ?>

        <section class="content">
        <div class="aside">
            <ul>
                <li><a class="page" href="produit.php?cat=rock">Rock</a></li>
                <li><a class="page" href="produit.php?cat=opera">Opera</a></li>
                <li><a class="page" href="produit.php?cat=classic">Classical</a></li>
            </ul>
        </div>
            <div style="background: #ffaa6a57;padding: 2vmin;"class="description small" >
                <?php
                    if(isset($_SESSION["user"])){
                        echo '<p style="font-size:2em" >bienvenue '.$_SESSION["user"]."</p>";
                    }
                ?>
                <p style="font-size:1.5em"><a class="logo" href="index.php">SongR:</a>
                    songR est une platforme de vente de fichiers musicaux, disponible en trois genre <a
                        href="produit.php?cat=rock">Rock</a>, <a href="produit.php?cat=opera">Opera</a> et <a
                        href="produit.php?cat=Classical">classic</a>
                </p>
                
            </div>
        </section>


        <?php require("footer.php") ?>
    </body>

    </html>