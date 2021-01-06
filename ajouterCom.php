<?php 
require "db.php";
if(!isset($_SESSION["user"])){
    header("location : index.php");
}
$id_produit=$_GET["id_produit"];$id_utilisateur=$_SESSION["id"];
$quantite=$_GET["quantite"];$table_produit=$_GET["table_produit"];

$req = "insert into panier (id_produit,id_utilisateur,quantite,table_produit) values ($id_produit,$id_utilisateur,$quantite,'$table_produit')";
$res=mysqli_query($conn,$req);
if($res){
    echo "succes";  
}else{
    echo "failure ".$req;
    print_r ($_GET);
    
}
?>