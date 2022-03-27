<?php
$con = mysqli_connect('localhost','root','root');
mysqli_select_db($con, 'mysql');


$query1="select * from master";
$result1 = mysqli_query($con,$query1);
$row=mysqli_fetch_assoc($result1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student</title>
    <link rel="stylesheet" href="styles/newswire.css">
</head>
<body>
<style>
    *
{
    padding:0;
    margin: 0;
    font-family: "bahnschrift";
    background-repeat:no repeat;
    background-color:#FFF0F5;
}
body
{
    background-size: 100%;
    background-attachment: fixed;
}

.container
{
    height: auto;
  
    width: 80%;
    margin-left: 10%;
}
.data
{
    height: auto;
    filter: drop-shadow(0 0 0.45rem #999);
    margin-top: 50px;
    background-color: white;
    border-radius:10px;
 
}
.name
{
    height: auto;
    background-color: gainsboro;
}
.name h1
{
    font-size: 35px;
    padding: 15px;
    color:black;

}
.time
{
    height: auto;
    background-color: gainsboro;
}
.time h2
{
    font-size: 15px;
    padding: 15px;
    font-weight: lighter;
    font-family: "Segeo ui";
    padding-bottom: 5px;
    color:navy;

 
}
.msg
{
    height: auto;
    margin-top: 5px;
    padding: 5px;

}
.msg h3
{
    font-size: 20px;
    padding: 15px;
    font-weight: normal;
    width: 80%;
    font-family: "Segeo ui";
}
.fcont
{
    height: auto;
 
}
.fcont h1
{
    font-size: 20px;
    padding-bottom: 10px;
}
.post
{
    height: auto;
    margin-top: 50px;
}
textarea
{
    resize: none;
    font-size: 15px;
    width: 100%;
}
input[type=text] {
    font-size: 15px;
    padding: 5px;
    width: auto;
}
input[type=submit] {
    width: 20%;
    background-color:black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left: 0%;
  }
  @media screen and (max-width: 1078px) 
{
  body
{
    background-image: url(images/pbgg.png);
    background-size: 100%;
    background-attachment: fixed;
}
  .name h1
{
    font-size: 20px;
    padding: 15px;
    color:black;

}
.msg h3
{
  font-size: 18px;
}
 
    
}
</style>
        
        <div class="container">
        <?php
        while($row=mysqli_fetch_assoc($result1))
        {
        ?>
    <div class="data">
        <form action="delete.php" method="POST">
        <div class="name"><h1><?php echo $row['Org']?></h1></div>
        <div class="time"><h1><?php echo $row['Address']?></h1></div>
        <div class="msg"><h2><?php echo $row['P_No']?></h2></div>
        <div class="msg"><h2><?php echo $row['Date']?></h2></div>
        <div class="msg"><h4><?php echo $row['Description']?></h4></div>
        <div class="msg"><h4><?php echo $row['Quantity']?></h4></div>
        <input type="submit" value="Take item.">
        </form>
    </div>
    <?php
        }
    ?>
    </div>
</div>
<div class="footer" style="padding-top:100px;"></div>

</body>
</html>
