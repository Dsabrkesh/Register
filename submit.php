<?php
if(
    isset($_GET['name']) &&
    isset($_GET['date']) &&
    isset($_GET['mail']) &&
    isset($_GET['phone']) &&
    isset($_GET['pass']) &&
    isset($_GET['gender'])  
  ){
    
    
$dbc_form = mysqli_connect("localhost","root","","form");
    
$name = $_GET['name'];
$date = $_GET['date'];
$mail = $_GET['mail'];
$phone = $_GET['phone'];
$gender = $_GET['pass'];
$pass = $_GET['gender'];
    
$query = "INSERT INTO register (name,date,mail,phone,gender,password) VALUES ('$name','$date','$mail','$phone','$gender','$pass');";
mysqli_query($dbc_form,$query);
// echo mysqli_error($dbc_form);
}
else{
    echo "SOMETHING WENT WRONG. TRY AGAIN";
}
?>
© 2018 GitHub, Inc.