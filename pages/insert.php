<?php
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$area=$_POST['area'];

// echo '<pre>';
// print_r($_POST);
// exit;
if(!empty($name)||!empty($emailid)||!empty($area))
{
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="user";


    //create connection

    $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
    $sql="INSERT INTO register (name, email, message)
        VALUES ('$name', '$emailid', '$area')";
    if(mysqli_connect_error())
    {
        die('Connect Error'('.mysqli_connect_error()'));
    }
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>