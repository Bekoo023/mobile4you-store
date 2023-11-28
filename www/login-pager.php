<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php';  ?>

    <div class="loginachtergrond">
        <p class="hoofdtxtlogin">Login:</p>
        <form action="login-proces.php" method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <p class="wrong">Onjuist wachtwoord of email!</p>
            <button type="submit" name="submit" class="submitlogin">Login</button><br>
        </form>
        <div class="registreerlogin">
            <label class="txtregistreerlogin">Nog geen account?</label><br>
            <a href="registreer.php"><button class="registreerknop">Registreer hier!</button></a>
        </div>
    </div>
    <?php include 'footer.php';  ?>
</body>

</html>