<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="registreer">
        <form action="registreer-proces.php" method="POST">
            <p class="hoofdtxtlogin">Registreer:</p>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="iemand@example.com">
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="firstname">Voornaam:</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div class="form-group">
                <label for="surname">Achternaam:</label>
                <input type="text" name="surname" id="surname">
            </div>
            <div class="form-group">
                <label for="adres">Adres:</label>
                <input type="text" name="adres" id="adres">
            </div>
            <div class="form-group">
                <label for="tel">Telefoonummer:</label>
                <input type="tel" name="tel" id="tel">
            </div>
            <button type="submit" name="submit" class="submitlogin">Registreer</button><br>
        </form>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>