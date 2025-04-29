<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    

    // Create a connection
$conn = new mysqli('localhost','root','','feedback');
if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
}else{
      $stmt = $conn->prepare("insert into comment(name,email,subject,message) values(?,?,?,?)");
$stmt->bind_param("ssss",$name,$email,$subject,$message);
$stmt->execute();
echo "feedback successfull.....";
$stmt->close();
$conn->close();



}


