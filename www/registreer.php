<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'header.php' ?>
    <?php include 'footer.php' ?>

    <form action="registreer-proces.php" method="POST">
        <div class="group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="iemand@example.com">
        </div>
        <div class="group">
            <label for="password">Wachtwoord:</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="group">
            <label for="firstname">Voornaam:</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="group">
            <label for="surname">Achternaam:</label>
            <input type="text" name="surname" id="surname">
        </div>
        <div class="group">
            <label for="adres">Adres:</label>
            <input type="text" name="adres" id="adres">
        </div>
        <div class="group">
            <label for="tel">Telefoonummer:</label>
            <input type="tel" name="tel" id="tel">
        </div>
    </form>
</body>

</html>