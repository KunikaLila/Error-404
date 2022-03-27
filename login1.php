<?php
session_start();

$conn = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($conn, 'mysql');
$name = $_POST['Username1'];
$pass = $_POST['Password1'];

$s = "SELECT * FROM ngo WHERE Username1 ='$name' AND Password1='$pass'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['logged_in'] = '1';
    include ('takefood.php');
    echo"login successful";
}
else{
    header('location:LOGINN.html');
    echo "login failed wrong Username or Password";
}

?>