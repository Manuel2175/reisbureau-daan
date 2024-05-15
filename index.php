<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>

<body>
    <?php
    include ('header.php');
    ?>
    <main>
<form action="">
    <input id="wachtwoord" type="text">
    <button onclick="control()" type="submit">
    <input type="submit">
</button>
</form>
    </main>
    <footer>

    </footer>
</body>

</html>
<script>
    function control()
    {
        var pass = Document.getElementById("wachtwoord").value;

        if(pass.trim() == "")
        {
            alert("je hebt nog geen wachtwoord ingevuld");
        }
    }
</script>