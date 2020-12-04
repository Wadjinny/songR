<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opera</title>
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
                <li><a href="#1">Don Carlos: "O' Don Fatal"</a></li>
                <li><a href="#2">Norma: "Casta Diva"</a></li>
                <li><a href="#3">Il trovatore: "Condotta ell'era in ceppi"</a></li>
                <li><a href="#4">Turandot: "Nessun dorma"</a></li>
                <li><a href="#5">Il trovatore: "Tacea la notte placida" </a></li>

            </ul>
        </div>
        <div class="description">
            <h1>Opera</h1>
            <button id= "stock">stock</button>
            <div id="1" class="song">
                <h1>Don Carlos: "O' Don Fatal":</h1>
                <div>
                    <img src="img/don_carlos_opera.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: Don Carlos, année: 1859
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <div id="2" class="song">
                <h1>Norma: "Casta Diva":</h1>
                <div>
                    <img src="img/norma_opera.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: Norma, année de creation: 1798
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <div id="3" class="song">
                <h1>Il trovatore: "Condotta ell'era in ceppi":</h1>
                <div>
                    <img src="img/trovatore_opera.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par:Il trovatore, année: 1789
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <div id="4" class="song">
                <h1>Turandot: "Nessun dorma":</h1>
                <div>
                    <img src="img/turandor_opera.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par:Turandot, année: 1765
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
            <div id="5" class="song">
                <h1>Il trovatore: "Tacea la notte placida"
                    :</h1>
                <div>
                    <img src="img/tovat_opera.jpg" alt="">
                    <div class="displayStock"><h4>0</h4></div>
                </div>
                Par: Il trovatore, année: 1745
                <div class="ItemCtrl"><button disabled>-</button><input value="0" type="text"><button>+</button></div>
                <button>Ajouter au panier</button>
            </div>
        </div>
    </section>


    <?php require("footer.php") ?>
</body>

</html>