<link rel="stylesheet" href="css/nav.css">
<style>
    nav li>a:hover{
        background-color: rgb(255,204,145);
    }
    .dropDown{
        position: absolute;
        top: 7vh;
        background: #ffc37e;
        overflow: hidden;
        transform: scale(1);
        transform-origin: top;
        transition: transform .5s;
        border-radius: 0 0px 10px 10px;
    }
    .dropDown a{
        width: 100%;
        padding: 1vmin 1.7vmin;
    }
    .dropDown ul{
        display: flex;
        flex-direction: column;
        z-index: 2;
        padding: 1vmin 0;
        align-items: center;
    }
    .dropDown li{
        width: 100%;
    }
 
    

    hr{
        width: 70%;
        border: none;
        height: 1px;
        background-color: rgb(179, 146, 105);
    }
    .hide{
        transform: scale(1,0);
    }

</style>
<nav>

    <div class="logo">
        <img src="img/logo.png" alt="logo">
        <a href="index.php">SongR</a>
    </div>
    <ul class="pagesL">
        <li><a class="page" href="index.php"><p>Acceuil</p></a></li>
        <li><a class="page" href="produit.php?cat=rock"><p>Rock</p></a></li>
        <li><a class="page" href="produit.php?cat=opera"><p>Opera</p></a></li>
        <li><a class="page" href="produit.php?cat=classic"><p>Classical</p></a></li>
        <li><a class="page" href="Contact.php"><p>Contact</p></a></li>
        <li>
            <a class="compte" href="#"><p>compte</p></a>
            <div class="dropDown hide">
                <ul>
                <?php
                    if(isset($_SESSION["user"])){
                        echo '                        
                        <li><a class="singup" href="index.php?deconnexion=true">Déconnexion</a></li>
                        <li><a class="singup" href="panier.php">Panier</a></li>
                        ';
                    }else{
                        echo '                       
                        <li><a class="singup" href="connexion.php">connexion/Crée un compte</a></li>
                        ';
                    }
                ?>
                    
                </ul>
            </div>
        </li>
    </ul>


    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Acceuil</a>
        <a href="produit.php?cat=rock">Rock</a>
        <a href="produit.php?cat=opera">Opera</a>
        <a href="produit.php?cat=classic">Classical</a>
        <?php
                    if(isset($_SESSION["user"])){
                        echo '                        
                        <a class="singup" href="panier.php">Panier</a>
                        <a class="singup" href="index.php?deconnexion=true">Déconnexion</a>
                        ';
                    }else{
                        echo '                  
                        <a class="singup" href="connexion.php">connexion/Crée un compte</a>
                        ';
                    }
                ?>
        <a href="Contact.php">Contact</a>
    </div>

    <span style="color:white;font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
        function afficheDrop(){
            drop = document.querySelector("a.compte~div")
            btn1 = document.querySelector("a.compte");
            btn1.addEventListener('click',()=>{
                drop.classList.toggle("hide")
            })
        }
        afficheDrop()
    </script>
</nav>