<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    

    // Create a connection
$conn = new mysqli('localhost','root','','log_in');
if($conn->connect_error){
         die('Connection Failed : '.$conn->connect_error);
}else{
      $stmt = $conn->prepare("insert into login(email,password) values(?,?)");
$stmt->bind_param("ss",$email,$password);
$stmt->execute();
echo "feedback successfull.....";
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




