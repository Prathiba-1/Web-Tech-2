<?php
 $MovieName = $_GET["MovieName"];
$link = mysqli_connect("localhost","root","","MovieMagic");
$result = mysqli_query($link,"SELECT * FROM Movies WHERE MovieName= '$MovieName'");
                while($row = mysqli_fetch_assoc($result))
                {
                echo '<img src="image/jpeg;base64,'.base64_encode($row["img"]).'"/>';
                }
mysqli_close($link);
?>