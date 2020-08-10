<?php


$username=$_POST['username'];
$email=$_POST['email'];
$topic=$_POST['topic'];
$message=$_POST['message'];

$conn=new mysqli('localhost','root','','details');
if($conn->connect_error){
    die('Connection Failed:'.$conn->connect_error);

}
else{
    $stmt=$conn->prepare("insert into register(username,email,topic,message) values(?,?,?,?)");
    $stmt->bind_param("ssss",$username,$email,$topic,$message);
    $stmt->execute();
    echo "Hola !!! Your Details Have Been Successfully Saved At Backend.....";
    $stmt->close();
    $conn->close();
}






?>


