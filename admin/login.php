<?php
include('conn.php');
session_start();

if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
$select=mysqli_query($conn,"SELECT * FROM admin where name='$name' AND password='$password'");
$count=mysqli_num_rows($select);
if($count>=1){
    $_SESSION['name']=$_POST['name'];
    $_SESSION['password']=$_POST['password'];
    header('location:Home.php');
}
else{
    
    echo "<script>alert('Wrong credentials');</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        Admin Name <input type="text" name="name"> <br>
        Admin Password <input type="password" name="password"> <br>
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
