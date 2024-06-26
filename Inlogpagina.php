<?php
    session_start();
    require("Connection.php");
    if (isset($_POST['login-submit'])){
        $email      = $_POST['email'];
        $password   = $_POST['password'];

        $sql = "SELECT * FROM Gebruiker WHERE Email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if(password_verify($password, $row['Wachtwoord']))
                $_SESSION["ingelogd"] = true;
                $_SESSION["Email"] = $row['Email'];
                header("Location: Homepagina.php");
                exit();
            }
        }else{
            echo "Inloggen mislukt";
        }
        $stmt-> close();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Inlogpagina.css">
    <title>Inloggen</title>
</head>
<body>
    <form action="inlogpagina.php" method="post">
            <h1>Inloggen</h1>
            <h2>Email</h2>
            <input type="text" name="email" placeholder="Email">
            <h2>Wachtwoord</h2>
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit" name="login-submit">Inloggen</button>
            <br>
            <button onclick="location.href='Signup.php'" type="submit" name="signup-submit">Registreren</button>
        </form>
</body>
</html>