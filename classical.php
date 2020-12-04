<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classical</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>
</head>

<body>
    <?php
       require("nav.php");
    ?>
    <section class="content">
        <div class="aside">
            <ul>
            <li><a href="#1">Moonlight Sonata</a></li>
                <li><a href="#2">Prelude</a></li>
                <li><a href="#3">Serenade No. 13</a></li>
                <li><a href="#4">Für Elise</a></li>
                <li><a href="#5">Prelude Op.28</a></li>

            </ul>
        </div>
        <div class="description">
            <h1>Classical</h1>
            <button id="stock">Stock</button>
            <!---->
            <div id="1" class="song">
                <h1>Moonlight Sonata:</h1>
                <div>
                    <img src="img/moonlight.jpg" alt="">
                    <div class="displayStock">
                        <h4>0</h4>
                    </div>
                </div>

                Par: Beethoven, année: 1807
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="2" class="song">
                <h1>Prelude:</h1>
                <div>
                    <img src="img/prelude.jpg" alt="">
                    <div class="displayStock">
                        <h4>0</h4>
                    </div>
                </div>
                Par: Bach, année: 1854
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text" ><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="3" class="song">
                <h1>Serenade No. 13:</h1>
                <div>
                    <img src="img/serenade.jpg" alt="">
                    <div class="displayStock">
                        <h4>0</h4>
                    </div>
                </div>
                Par: Mozart, année: 1793
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="4" class="song">
                <h1>Für Elise:</h1>
                <div>
                    <img src="img/fur_elise.jpg" alt="">
                    <div class="displayStock">
                        <h4>0</h4>
                    </div>
                </div>
                Par: Beethoven, année: 1817
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="5" class="song">
                <h1>Prelude Op.28:</h1>
                <div>
                    <img src="img/prelude.jpg" alt="">
                    <div class="displayStock">
                        <h4>0</h4>
                    </div>
                </div>
                Par: chopin, année: 1803
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
        </div>
    </section>


 <?php require("footer.php"); ?>
</body>

</html>