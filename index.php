<?php

// hierin staat the login code waar de form van hieronder naartoe word gestuurd.
include('login.php');

if(isset($_SESSION['login_user'])){
    header("location: home.php");
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login Pitloze Duif</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <h1>Welkom!</h1>
    <p1>Vul uw gegevens in om in te loggen.</p1>
    <br></br>
    <div id="login">
        <form action="" method="post">
            <label>Gebruikersnaam :</label>
            <input id="name" name="username" placeholder="username" type="text">
            <label>Paswoord :</label>
            <input id="password" name="password" placeholder="**********" type="password">
            <input name="submit" type="submit" value=" Login ">
            <span><?php echo $error; ?></span>
        </form>
    </div>
</div>
</body>
</html>