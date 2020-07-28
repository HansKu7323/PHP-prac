<?php
  $size = $_POST["size"];
  $width = $_POST["width"];
  $height = $_POST["height"];
  $color_1 = $_POST["color_1"];
  $color_2 = $_POST["color_2"];

  echo "<table bgcolor=$color_1 border='0'>";
  for($i=0;$i<$height;$i++){
    echo "<tr>";
      for($j=0;$j<$width;$j++){
        if(($i+$j)%2 == 0){
          echo "<td width=$size height=$size></td>";
        }else{
          echo "<td width=$size height=$size bgcolor=$color_2></td>";
        }
      }
    echo "</tr>";
  }

  
?>