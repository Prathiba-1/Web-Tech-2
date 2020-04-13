<?php

 //$MovieName=$_GET['MovieName'];
  //do some validation here to ensure id is safe

  $link = mysqli_connect("localhost","root","","MovieMagic");
  
   
  $result = mysqli_query($link,"SELECT * FROM Movies WHERE MovieName='$MovieName'");
  $row = mysqli_fetch_assoc($result);
  $s=$row['Description'];
//header("Content-type: image/jpeg");
 echo $s;
   
  mysqli_close($link);

// header("Content-type: image/jpeg");
 //echo $s. '<alt="HTML5 Icon" style="width:450x;height:415px">';
   
?>