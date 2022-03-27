<?php
session_start();
$conn = mysqli_connect('localhost', 'root', 'root');

if(!$conn){
    echo 'Not Connected';
}
mysqli_select_db($conn, 'mysql');
$org1 = $_POST['Org1'];
$name1 = $_POST['Username1'];
$pass1 = $_POST['Password1'];
$address1 = $_POST['Address1'];
$phone1 = $_POST['P_No_1'];

$regg = "INSERT INTO ngo (Org1, Username1, Password1, Address1, P_No_1) VALUES ('$org1','$name1','$pass1','$address1','$phone1')";
mysqli_query($conn, $regg);

$con = mysqli_connect('localhost', 'root','root');

echo 'Done';