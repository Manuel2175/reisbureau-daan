<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/header.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>
<?php
    include ('connection.php');
?>
<body>
    <header>
        <!-- header afbeelding waarbij er een lucht als achtergrond is
             en een vliegtuig die van links naar rechts vliegt 
             ook een button die als een "easter egg" word gebruikt 
             dat als je op het vliegtuig drukt er iets grappigs gebeurt -->

        <section class="header-img">
            <marquee scrollamount="10" behavior="scroll" direction="right">
                <button onclick="randomding()" type="button">
                    <img src="img/header_img/plane.png" alt="vliegtuig" id="vliegtuig">

                </button>

            </marquee>
        </section>
        <!-- einde luhct met vliegtuig -->

        <!-- begin navigatie balk met elke knop voor aparta paginas 
        en een klok -->
        <nav>
            <ul>
                <li>
                    <a href="reizen.php">
                        <div class="header-knop">
                            <h3>Reizen</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="over-ons.php">
                        <div class="header-knop">

                            <h3>Over ons</h3>

                        </div>
                    </a>
                </li>
                <li>
                    <a href="contact.php">
                        <div class="header-knop">
                            <h3>Contact</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="admin.php">
                        <div class="header-knop">
                            <h3>Admin</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <div class="header-knop">
                            <h3>Login</h3>
                        </div>
                    </a>
                </li>
                <li>

                    <div id="clock"></div>
                </li>
            </ul>
        </nav>
    </header>
    <script>
        function randomding() {

            var body = document.body;

            // Set the body's HTML content to an empty string
            body.innerHTML = "<div> <p>episch</p> </div>";
        }

        function updateClock() {
            const now = new Date();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();


            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;


            const timeString = hours + ':' + minutes + ':' + seconds;


            document.getElementById('clock').textContent = timeString;
        }


        setInterval(updateClock, 1000);


        updateClock();
    </script>
</body>

</html>
<script>

    function randomding() {

        var body = document.body;

        body.innerHTML = "<h1> epic </h1>";

    }
</script>