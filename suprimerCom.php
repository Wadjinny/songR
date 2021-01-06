<?php 
require "db.php";
if(!isset($_SESSION["user"])){
    header("location : index.php");
}
$id_produit=$_GET["id_com"];

$req = "delete from panier where id='$id_produit'";
$res=mysqli_query($conn,$req);
if($res){
    echo "succes";
}else{
    echo "failure ".$req;
    print_r ($_GET);
}
?>