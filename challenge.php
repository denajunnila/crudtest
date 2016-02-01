<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge</title>
</head>
<body>
    
   <?php
$servername = "127.0.0.1";
$username = "junnila";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM people";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br>". $row["id"]. " ". $row["firstname"]. " " . $row["lastname"] . "<br>";
     }
} else {
     echo "0 results";
}

$conn->close();
?>  

  
</body>
</html>