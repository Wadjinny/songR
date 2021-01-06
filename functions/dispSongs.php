<?php
function dispSongs($table){
    global $conn;
$sql = "SELECT * FROM $table";
           $result = mysqli_query($conn, $sql);
           
           if (mysqli_num_rows($result) > 0) {
             // output data of each row
             while($row = mysqli_fetch_assoc($result)) {
                 $id=$row["id"];$titre=htmlentities($row["titre"]);$img=$row["img"];$description=$row["description"];$stock=$row["stock"];
               echo utf8_encode(<<<EOD
               <div songId="$id" class=" song">
               <h1 title="$titre">$titre</h1>
               <hr><br>
               <div>
               <div class="imgHolder">
                   <img src="$img" alt="">
               </div>
                
                   <div>$description</div>
               </div>
               <div style="display: flex; flex-direction: column; align-items: center; float:right;padding:.5vmin">
                   <div data_max="$stock" class="counter"
                       style="display: flex;flex-direction: row;align-items: center;justify-content: flex-end;">
                       <span style="font-size: 3em;">0</span>
                       <div style="display: flex;flex-direction: column;">
                           <i class='fas fa-chevron-up'></i>
                           <i class='fas fa-chevron-down'></i>
                       </div>
                   </div>
                   <span class="quantity">stock: <span>$stock</span> </span>
                   <button>ajouter au panier</button>
               </div>
               </div>
               EOD);
             }
           } else {
             echo "0 results";
           }
           
}
?>