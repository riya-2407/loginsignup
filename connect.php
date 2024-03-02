<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];


//connect to data base

$conn = new mysqli('localhost','root','','','maddy');
if($conn->connect_error){
    die('connection failed : ' .$conn->connect_error);
    
}else{
    $stmt = $conn->prepare("insert into registration(fname,lname,email,pass)values(?,?,?,?)");
    $stmt->bind_param("ssss",$fname,$lname,$email,$pass);
    $stmt->execute();
    echo "registration successfully... ";
    $stmt->close();
    $conn->close();
}

?>