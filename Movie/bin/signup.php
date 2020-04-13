<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="MovieMagic";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$name=$_POST["name"];

$gender=$_POST["sex"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["password"];


$sql = "INSERT INTO CUSTOMER (Name, Password, Gender, Email, Phno)
VALUES ('$name', '$password', '$gender', '$email', $phone)";


//$sql = "INSERT INTO Feedback(name, age, gender, email, movie, Comments, Rating) VALUES('$a',$b,'$c','$d','$e','$f',$g)";


if ($conn->query($sql) === TRUE) {
    echo'<script>alert("signed up successfully!!");window.open("../index.html", "_self");</script>';
    
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
     echo '<script>window.open("../index.html", "_self");</script>';
}
mysqli_close($conn);


?>