<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inika:wght@400;700&display=swap" rel="stylesheet">
    <title>opdracht</title>
</head>

<body>
    <?php
    include ('header.php');
    include ('connection.php');
    ?>
    <main>
        <section class="landingspagina">
            <h1>BOEK HIER JE REIS</h1>
        </section>

        <section class="reis-formulier">
            <form class="reis" action="reis.php">
                <input type="text" name="start" placeholder="vertrek">
                <input type="text" name="aankomst" placeholder="aankomst">
                <input type="date" name="vertrek-datum">
                <input type="date" name="terug-datum">
                <input type="submit">
            </form>
        </section>

        <section class="aangerade-reizen">
            <div class="aangerade-reizen-blok">
                <img src="" alt="">
                <div class="aangerade-reizen-text-blok">
                    <h3>
                        reis
                    </h3>
                    <p>
                        reis info
                    </p>
                </div>
            </div>

            <div class="aangerade-reizen-blok">
                <img src="" alt="">
                <div class="aangerade-reizen-text-blok">
                    <h3>
                        reis
                    </h3>
                    <p>
                        reis info
                    </p>
                </div>
            </div>

            <div class="aangerade-reizen-blok">
                <img src="" alt="">
                <div class="aangerade-reizen-text-blok">
                    <h3>
                        reis
                    </h3>
                    <p>
                        reis info
                    </p>
                </div>
            </div>

            <div class="aangerade-reizen-blok">
                <img src="" alt="">
                <div class="aangerade-reizen-text-blok">
                    <h3>
                        reis
                    </h3>
                    <p>
                        reis info
                    </p>
                </div>
            </div>  
        </section>


    </main>
    <?php
    include("footer.php");
    ?>
</body>

</html>