<?php


$email = $_POST["users_email"];
$pass = $_POST["users_pass"];


$con = mysql_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysql_select_db("my_dbname",$con);

$result = mysql_query("SELECT users_email, users_pass FROM users WHERE users_email = $email");

$row = mysql_fetch_array($result);

if($row["users_email"]==$email && $row["users_pass"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>