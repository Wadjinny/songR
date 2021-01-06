<?php
require "db.php";
    if(!isset($_SESSION["user"])){
        header("location : index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/js.js"></script>
    <style>
    .commande>*{
        padding:10px;
    }
    .commande{

    }
    #quant h1{
        font-size:3.5em;
    }
    .suprimer{
        color: red;
        text-align:right;
        font-size:3em;

    }
    #thirdDiv{
        display:flex;
        flex-direction:column;
        justify-content:space-between;
        padding-bottom:0;
        cursor:pointer;
    }
    .vtrCom{
        font-size:3em;
    }
    .commander{
        margin: 10vmin;
        color: #0068b8;
        background: #537bf845;
        border: solid;
        cursor: pointer;
        padding:3vmin;
    }
    .content{
        flex-direction:column;
        align-items:center;
    }
    .commandes{
        display:flex;
        flex-direction:column;
        max-width:1000px;
    }
    .commandes>*{
        margin-top: 5vh;
        border-radius: 10px;
    }

    </style>

</head>

<body style="">
    <?php
       require("nav.php");
    ?>
    <section class="content">
    <p class="vtrCom">Votre Commandes:</p>
        <?php
            $res = mysqli_query($conn,'select * from panier where id_utilisateur="'.$_SESSION["id"].'"');
            if(mysqli_num_rows($res)==0){

                echo <<<EOT
                <p style="
                height: 590px;
            ">vous n'avez aucune commandes.</p>
EOT;
            }
            echo "<div class = commandes>";
            while($resrow=mysqli_fetch_assoc($res)){
                $res0 = mysqli_query($conn,'select * from '.$resrow["table_produit"].' where id="'.$resrow["id_produit"].'"');
                $resprod=mysqli_fetch_assoc($res0);
                $img=$resprod["img"];$titre=utf8_encode($resprod["titre"]);$description=utf8_encode($resprod["description"]);$quantite=$resrow["quantite"]; 
                $id=$resrow["id"];

                echo <<<EOT
                <div id_com='$id' class="commande" style="
                height: fit-content;
                display: flex;
                border: solid;
            ">
                <img src="$img" style="
                width: 50%;
            ">
                <div>
                    <h1>$titre</h1>
                    <p>$description</p>
                </div>
                <div id="thirdDiv" >
                    <span id="quant">quantité: <h1>$quantite</h1></span>
                    <span class="suprimer">x</span>
                </div>
                </div>
 EOT;

            }
            echo "</div>";
            if(mysqli_num_rows($res)>0){
                echo "";
            }
        ?>
    <button class=commander>Commander</button>
    </section>
    <?php require("footer.php"); ?>
<script>
settingUpdeletePanier()

function settingUpdeletePanier() {
    let commandes = Array.from(document.querySelectorAll(".commande"))
    commandes.forEach(command => {
        let btn = command.querySelector(".suprimer")
        btn.addEventListener('click', () => {
            let commandeID = command.getAttribute("id_com")
            if(confirm("étes-vous sur que vous voulez supprimer cette Commande?")){
                deleteCom(commandeID)
                command.style.display="none"
            }
        })
    });
}

function deleteCom(id_com) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        let div = document.createElement('div')
        div.classList.add('hoverDiv')
        if (this.readyState == 4 && this.status == 200)
            if (this.response == "succes") {
                console.log("succes")
                div.innerHTML=`<span class="msgAlertGood"><i class="fas fa-thumbs-up" aria-hidden="true"></i> Votre commande a été suprimer </span>`
                document.body.append(div)
            } else {
                div.innerHTML = `<span class="msgAlertBad"></i> ${this.response} </span>`
                document.body.append(div)

            }
    }
    let valeur = `id_com=${id_com}`
    xhttp.open("GET", "suprimerCom.php?" + valeur, true);
    xhttp.send();
}

</script>
</body>

</html>