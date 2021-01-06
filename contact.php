<?php
require "db.php";
$msg="";$error="";
function com($x,$a,$b)
{
  return $a<=strlen($x) & strlen($x)<=$b;
}
if(isset($_GET["nom"])){
  try{
    $nom=$_GET["nom"];
    $prenom=$_GET["prenom"];
    $sexe=$_GET["sexe"];
    $cars=$_GET["cars"];
    $comment=$_GET["comment"];
    $sexes=array("Homme","Femme");
    $fonction=array("Enseignant","etudiant","Policer","Boulanger");
    if(com($nom,4,20) & com($prenom,4,20)  & com($comment,20,100)  & in_array($sexe,$sexes) & in_array($cars,$fonction)){
      $req="INSERT INTO contact (nom,prenom,sexe,fonction,comment) VALUES ('$nom','$prenom','$sexe','$cars','$comment')";
      $res=mysqli_query($conn,$req);
      if($res){
        $msg="Votre message a été envoyé";
      }else{
        $error="veuillez réessayer ultérieurement";
      }
    }else{
    $error="Veuillez remplir la formule proprement";
    }
  }catch(Exception $e){
    $error="Veuillez remplir la formule proprement";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/js.js"></script>
  <style>
    textarea[name=comment]{
      width:100%;
    }
  </style>
</head>

<body>
  <?php require("nav.php"); ?>

  <section class="content">
    <div class="description" style="overflow-x: hidden;">
      <h1 >Demande de Contact</h1>

      <?php if(!empty($msg)): ?>

      <span class="msgAlertGood"><i class="fas fa-thumbs-up" aria-hidden="true"></i> <?= $msg ?> </span>

      <?php elseif (!empty($error)):?>

      <span class="msgAlertBad"><i class="fas fa-ban" aria-hidden="true"></i> <?= $error ?> </span>

      <?php endif ?>

      <div class="Contact">
        <form action="">
        <label for="fname">Nom</label>
        <input minlength=4 maxlength=20 required  type="text" id="nom" name="nom" placeholder="Votre nom...">
        
        <label for="fname">Prenom</label>
        <input minlength=4 maxlength=20 required type="text" id="prenom" name="prenom" placeholder="Votre Prenom...">
        
        <label id="radio">Sexe</label>
      
        <input name="sexe" type="radio" id="Homme" value="Homme" checked>
        <label for="Homme">Homme</label>
      
        <input name="sexe" id="Femme" type="radio" value="Femme">
        <label for="Femme" >Femme</label>
        <div>
          <label >Function</label>
          <select required name="cars" id="cars" >
            <option value="Enseignant">Enseignant</option>
            <option value="Etudiant">Etudiant</option>
            <option value="Policier">Policier</option>
            <option value="Boulanger">Boulanger</option>
          </select>
        </div>
        
        Comment:
        <textarea required minlength=20 maxlength=100 rows="4" cols="50" name="comment"></textarea>
        
        <input type="submit" value="Envoyer" class="submit">
        
      </form>
      </div>
      </div>
  </section>


  <?php require("footer.php") ?>
</body>

</html>