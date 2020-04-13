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


$sql1="
CREATE TABLE customer (
 Cid int(3) NOT NULL AUTO_INCREMENT,
 Name varchar(20) NOT NULL,
 Password tinytext NOT NULL,
 Age int(2) NOT NULL,
 Gender char(10) NOT NULL,
 Email tinytext NOT NULL,
 Phno bigint(9) NOT NULL,
 PRIMARY KEY (Cid)
) ";


$sql2 = "CREATE TABLE Movies (
MovieName VARCHAR(30), 
Description TEXT NOT NULL,
Ratings INT,
Status VARCHAR(15),
img LONGBLOB,
PRIMARY KEY(MovieName)
)";
    


$sql3 = "CREATE TABLE Screen (
ScreenNo INT, 
Timings TIME NOT NULL,
PRIMARY KEY(ScreenNo, Timings)
)";


$sql4 = "CREATE TABLE MScr (
ScreenNo INT, 
Timings TIME,
MName VARCHAR(30),
PRIMARY KEY(ScreenNo, Timings, MName)
)";


$sql5 = "CREATE TABLE Seats (
seatNo VARCHAR(4), 
Status VARCHAR(15),
CId INT,
Timings TIME,
ScreenNo INT,
Day VARCHAR(10),
PRIMARY KEY(seatNo, CId, ScreenNo, Timings, Day)
)";

if ($conn->query($sql1) === TRUE) {
    echo "Table Customer created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table Movies created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "Table Screen created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql4) === TRUE) {
    echo "Table MScr created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql5) === TRUE) {
    echo "Table seats created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
