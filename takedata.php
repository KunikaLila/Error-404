<?php
$connn = mysqli_connect('localhost', 'root', 'root');

if(!$connn){
    echo 'Not Connected';
}
mysqli_select_db($connn, 'mysql');
$add = $_POST['Address'];
$phone = $_POST['P_No'];
$desp = $_POST['Description'];
$quant = $_POST['Quantity'];
$org2 = $_POST['org'];
$dt = $_POST['date'];

$re = "INSERT INTO master (Org, Description, Quantity, Address, P_No, Date) VALUES ('$org2','$desp','$quant','$add', '$phone', '$dt')";
mysqli_query($connn, $re);


echo 'Done';
?>