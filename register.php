<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'root');

if(!$con){
    echo 'Not Connected';
}
mysqli_select_db($con, 'mysql');
$org = $_POST['Org'];
$name = $_POST['Username'];
$pass = $_POST['Password'];
$address = $_POST['Address'];
$phone = $_POST['P_No'];

$reg = "INSERT INTO donor (Org, Username, Password, Address, P_No) VALUES ('$org','$name','$pass','$address','$phone')";
mysqli_query($con, $reg);

$con = mysqli_connect('localhost', 'root','root');
echo 'Done';