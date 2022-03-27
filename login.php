<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'root');

mysqli_select_db($con, 'mysql');
$name = $_POST['Username'];
$pass = $_POST['Password'];
//$org = "SELECT * FROM donor WHERE Username = '$name'";
$address = "SELECT address FROM donor WHERE Username = '$name'";
$phone = "SELECT P_No FROM donor WHERE Username = '$name'";
$s = "SELECT * FROM donor WHERE Username ='$name' AND Password='$pass'";
$result = mysqli_query($con, $s);
//$result1 = mysqli_query($con, $org);
$result2 = mysqli_query($con, $address);
$result3 = mysqli_query($con, $phone);


$num = mysqli_num_rows($result);
if($num == 1){
    
    //$_SESSION['on'] = $result1;
     $_SESSION['adr'] = $result2;
     $_SESSION['pno'] = $result3;
    // $_SESSION['logged_in'] = '1';
    isset($quant);
    isset($desp);
    isset($org);
    isset($result2);
    isset($result3);
    include ('main.html');
    echo"login successful";

}
else{
    header('location:LOGIND.html');
    echo "login failed wrong Username or Password";
}

?>