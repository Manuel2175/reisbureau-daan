<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <main>
        <section class="sectioninlog">
            <div class="login-container">
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <input type="email" name="email" placeholder="E-mailadres" required>
                    <input type="password" name="password" placeholder="Wachtwoord" required>
                    <button type="submit">Inloggen</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
    </footer>
</body>

</html>
