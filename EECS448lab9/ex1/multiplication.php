<?php

  function drawMultiTable(){

    echo "<table class=\"multiplication\", border='1px' >";
    for($i = 0; $i <= 100; $i++){
      echo "<tr>";
      for($j = 0; $j <= 100; $j++){
        if($i == 0 && $j == 0){
          echo "<td>  </td>";
        }
        else if($i == 0 ){
          echo "<td>" . $j . "</td>";
        }
        else if($j == 0){
          echo "<td>" . $i . "</td>";
        }
        else{
          echo "<td>" . $i * $j . "</td>";
        }
      }
      echo "</tr>";
    }
    echo "</table>";
   }


  drawMultiTable();

  echo "</body>
        </html>";
 ?>