<?php
    if (isset($_SESSION["ingelogd"])){
        if ($_SESSION["ingelogd"] == true){
            
    }else{
        header("Location: Inlogpagina.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Homepagina.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <ul>
            <h1>您好，您已登錄</h1>
                <li><a href="Homepagina.php">Home</a></li>
                <li><a href="account.php">account</a></li>
            </ul>
        </nav>
    </header>
    <div class="gegevens">
        <h1>Home</h1>
        <p>Welkom op de homepagina</p>
</body>
</html>