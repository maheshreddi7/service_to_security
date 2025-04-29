<?php
    $email = $_POST['email'];
    

    // Create a connection
$conn = new mysqli('localhost','root','','testk');
if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
}else{
      $stmt = $conn->prepare("insert into student(email) values(?)");
$stmt->bind_param("s",$email);
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
        include 'C:\xampp\htdocs\blog.html';
    ?>
</body>
</html>

