<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];

            require 'database.php';

            $sql = "SELECT * FROM users WHERE email= '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $gebruiker = mysqli_fetch_assoc($result);

                if ($gebruiker['password'] == $password) {

                    session_start();
                    $_SESSION['email'] = $gebruiker['email'];
                    $_SESSION['password'] = $gebruiker['password'];

                    header("location: index.php");
                } else {
                    echo "wachtwoord onjuist";
                }
            }
        }
    }
}
