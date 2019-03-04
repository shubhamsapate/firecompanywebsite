
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    
}
table{
    width:100%
}
body{
    background-color:black;
    color:white;
    text-align:center;
}

</style>
</head>
<body>

<h1>administration</h1>
<h3>user record</h3>

<?php
 $host="localhost";
 $dbUsername="root";
 $dbPassword="";
 $dbname="user";

// Create connection
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, email, message FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>name</th><th>email</th><th>message</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td><td>" . $row["email"]."</td><td>". $row["message"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
