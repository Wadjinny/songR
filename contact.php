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
</head>

<body>
  <?php require("nav.php"); ?>

  <section class="content">
    <div class="description" style="overflow-x: hidden;">
      <h1 >Demande de Contact</h1>
      <div class="Contact">
        <label for="fname">Nom</label>
        <input type="text" id="nom" name="firstname" placeholder="Votre nom...">
        
        <label for="fname">Prenom</label>
        <input type="text" id="prenom" name="firstname" placeholder="Votre Prenom...">
        
        <label id="radio">Sexe</label>
        <label class="container">Home
          <input type="radio" checked="checked">
          <span class="checkmark"></span>
        </label>
        <label class="container">Femme
          <input type="radio">
          <span class="checkmark"></span>
        </label>
        
        <label for="">Function</label>
        <select name="cars" id="cars" form="carform">
          <option value="Enseignant">Enseignant</option>
          <option value="Etudiant">Etudiant</option>
          <option value="Policier">Policier</option>
          <option value="Boulanger">Boulanger</option>
        </select>
        
        Comment:
        <textarea rows="4" cols="50" name="comment"></textarea>
        
        <input type="submit" value="Envoyer" class="submit">
      </div>
  </section>


  <?php require("footer.php") ?>
</body>

</html>