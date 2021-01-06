<?php
function dispSide($table){
    global $conn;
$sql = "SELECT titre FROM $table";
           $result = mysqli_query($conn, $sql);
           
           if (mysqli_num_rows($result) > 0) {
             // output data of each row
             while($row = mysqli_fetch_assoc($result)) {
                 $titre=$row["titre"];
               echo utf8_encode(<<<EOD
               <li><a href="#1">$titre</a></li>
               EOD);
             }
           } else {
             echo "0 results";
           }
           
}
?>