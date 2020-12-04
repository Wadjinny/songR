<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>
</head>

<body>
    <?php require("nav.php"); ?>

    <section class="content">
        <div class="aside">
            <ul>
                <li><a href="#1">Such a lonely day</a></li>
                <li><a href="#2">bohemian rhapsody queen</a></li>
                <li><a href="#3">Creep</a></li>
                <li><a href="#4">feels like teen spirit</a></li>
                <li><a href="#5">I stand alone</a></li>

            </ul>
        </div>
        <div class="description">
            <h1>Rock</h1>
            <button id= "stock">stock</button>
            <div id="1" class="song">
                <h1>
                    Such a lonely day:
                </h1>
                <div>
                    <img src="img/soad.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: System of a down, année: 2005
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="2" class="song">
                <h1>
                    bohemian rhapsody queen:
                </h1>
                <div>
                    <img src="img/queen.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par Queen, année: 1994
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="3" class="song">
                <h1>
                    Creep:
                </h1>
                <div>
                    <img src="img/radiohead.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: RadioHead, année: 1990
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="4" class="song">
                <h1>
                    feels like teen spirit:
                </h1>
                <div>
                    <img src="img/nirvana.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: Nirvana, année: 1991
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <!---->
            <div id="5" class="song">
                <h1>
                    I stand alone:
                </h1>
                <div>
                    <img src="img/godsmack.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: GodSmack, année: 2000
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>

        </div>
    </section>


    <?php require("footer.php") ?>
</body>

</html>