<?php
    require "db.php";
    if(isset($_SESSION["user"])){
        header("location: index.php");
    }
    if(isset($_POST["submitType"])){
        $username=$_POST["username"];$password=$_POST["password"];
        if(empty($username) | empty($password)){
            $erreur = "Veuillez taper un nom et un mot de passe.";
        }elseif($_POST["submitType"]=="connexion"){
            $req="select id from utilisateur where nom='$username' and password=MD5('$password')";
            
            $res=mysqli_query($conn,$req);
            $resId=mysqli_fetch_assoc($res)["id"];
            if($resId){
                $_SESSION["user"]=$username;
                $_SESSION["id"]=$resId;
                setcookie("user",$username,time() + 86400*30,"/");
                setcookie("id",$resId,time() + 86400*30,"/");
                header("location: index.php");
            }else{
                $erreur = "Le nom ou le mot de passe est incorrecte.";
            }
            
        }
        if($_POST["submitType"]=="signup"){
            $res=mysqli_query($conn,"select count(*) as user from utilisateur where nom='$username'");
            
            if(mysqli_fetch_assoc($res)["user"]==0){
                $res0=mysqli_query($conn,"insert into utilisateur (nom,password) values ('$username',MD5('$password'))");
                $succes=true;
            }else{
            $erreur = "ce utilisateur existe déjà.";
        
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>compte</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/js.js"></script>
    <style>
        .content {
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .input {
            display: flex;
            width:100%;
            justify-content: space-around;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: start;
        }
        .input>div{
            width: 100%;
            max-width: 500px;
        }
        .title{
            font-size: 3em;
        }
        .tab{
            color:#ce8b40 ;
            padding: 1vmin;
            text-transform: uppercase;
        }
        p hr{
            width: 10%;
        }
        .input button{
            width: fit-content;
            padding: 1vmin 1.5vmin;
            margin: 10px;
            align-self: center;
            color:#d17e1e;
            background-color:#d17e1e54 ;
            border: solid #d17e1e 2px ;
            border-radius: 10px;
            cursor:pointer;

        }
    </style>
</head>

<body>
    <?php require("nav.php"); ?>
    <section class="content">
        <p class="title">BIENVENUE</p>
        <?php
            if(isset($erreur)){
                echo "<span style='margin: 0;color: #ff5656;background: #ff00001f;padding: 5px;border: solid 1px;'><i class='fas fa-ban'></i> $erreur</span>";
            }
            if(isset($succes)){
                echo "<span style='margin: 0;color: #1fd902;background: #75ff0045;padding: 5px;border: solid 1px;'><i class='fas fa-thumbs-up' ></i> Votre compte a été crée avec succés</span>";
            }
        ?>
        
        
        <div class="input">
            <div class="connexion">
                <form method="post">
                    <span class="tab">connexion</span>
                    <hr>
                    <label for="username">Nom:</label>
                    <input type="text" placeholder="Entrer to nom" name="username" id="username" class="username">
                    <label for="password">Mot de passe:</label>
                    <input autocomplete="" placeholder="Entrer to mot de passe" type="password" name="password" id="password"
                        class="password">
                    <input type="hidden" type="text" name="submitType" value="connexion">
                    <button type="submit">connexion</button>
                </form>
            </div>
            <div class="signup">
                <form method="post">
                    <span class="tab">Crée un compte</span>
                    <hr>
                    <label for="username">Nom:</label>
                    <input type="text" placeholder="Entrer to nom" name="username" id="username" class="username">
                    <label for="password">Mot de passe:</label>
                    <input  placeholder="Entrer to mot de passe" type="password" name="password" id="password"
                        class="password">
                    <input type="hidden" type="text" name="submitType" value="signup">
                    <button type="submit">Crée un compte</button>
                </form>
            </div>

        </div>
    </section>
    <?php require("footer.php") ?>
</body>

</html>