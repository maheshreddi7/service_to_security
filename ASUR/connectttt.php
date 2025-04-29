<?php
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $userid = $_POST['userid'];
    $password= $_POST['password'];
    

    // Create a connection
$conn = new mysqli('localhost','root','','signupp');
if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
}else{
      $stmt = $conn->prepare("insert into details(firstname,lastname,email,userid,password) values(?,?,?,?,?)");
$stmt->bind_param("sssss",$firstname,$lastname,$email,$userid,$password);
$stmt->execute();
$stmt->close();
$conn->close();



}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Linking HTML File in PHP</title>
</head>
<body>
    <?php
        // Your PHP code here
        
        // Include the HTML file
        include 'C:\xampp\htdocs\login.html';
    ?>
</body>
</html>

