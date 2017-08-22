<?php
//server connectie word hier opgezet.
$connection = mysql_connect("localhost", "root", "root");



// database selectie
$db = mysql_select_db("company", $connection);


// Starting Session
session_start();


// sessie word gestored.
$user_check=$_SESSION['login_user'];


// SQL Query om de authenticatie gegevens op te vragen van de DB.
$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){

    // Connectie word hier afgesloten als de inlog gegevens niet kloppen.
    mysql_close($connection);

    // Redirecting To Home Page
    header('Location: index.php');
}
?>