<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
</head>
<?php
include ('connection.php');
?>

<body>
    <footer>
        <section class="nieuwsbrief">
            <h2>
                Nieuwsbrief
            </h2>
            <p>Meld u aan voor de nieuwsbrief en
                ontvang wekelijks goede Drugs deals in uw Mail-Box</p>
            <form action="nieuwsbrief.php">
                <input type="email" name="email" placeholder="U email adres">
                <input type="submit" value="aanmelden">
            </form>
        </section>
        <section class="populaire-reizen">
            <h2>
                Populaire reizen
            </h2>
            <ol>
                <li>
                    <a
                        href="https://www.google.nl/maps/place/Millingen+aan+de+Rijn/@51.8595974,5.9834413,13z/data=!3m1!4b1!4m6!3m5!1s0x47c70aaacb9614b5:0xe38ef75cc6dca715!8m2!3d51.8633!4d6.0475!16zL20vMHZrNzc?hl=nl&entry=ttu">
                        <p>Millingen aan de Rijn</p>
                    </a>
                </li>
                <li>
                    <a
                        href="https://www.google.nl/maps/place/Wijchen/@51.8595974,5.9834413,13z/data=!4m6!3m5!1s0x47c706ad547dd1fd:0xa2a5f89e771236f8!8m2!3d51.8136739!4d5.7528948!16zL20vMHZrajI?hl=nl&entry=ttu">
                        <p>Wijchen</p>
                    </a>
                </li>
                <li>
                    <button type="button" onclick="Prank()">
                        <p>thuis</p>
                    </button>
                </li>
            </ol>
        </section>
        <section class="social-media">
            <h2>
                Social media
            </h2>
            <img src="img\footer_img\icons.png" alt=" icons">
        </section>
    </footer>
    <script>
function Prank() {
    document.body.innerHTML = "<h1>404 not found</h1>";
    setTimeout(function() {
        alert("je hebt geen thuis LOSER");
    }, 2000); // 5000 milliseconds = 5 seconds
}

    </script>
</body>

</html>