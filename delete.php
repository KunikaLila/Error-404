<?php

    $conn = mysqli_connect('localhost','root','root');
    mysqli_select_db($conn, 'mysql');
    $query2="select * from master";
    $result2 = mysqli_query($conn,$query2);
    $row=mysqli_fetch_assoc($result2);

    $orgname = $row['Org'];
    $s = "DELETE FROM master WHERE Org ='$orgname'";
    $result = mysqli_query($conn, $s);

echo 'Taken Successfully.'

?>