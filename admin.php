<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht</title>
</head>

<body>
    <?php
    include ('header.php');
    include ('connection.php');
    ?>
    <main>
    <section class="landingspagina">
    <h1>vul hier niewe locaties toe</h1>
        </section>

        <section class="reis-formulier">
        <form class="reis" action="addreis.php" method="POST">
            <input type="text" name="land" placeholder="land">
            <input type="text" name="stad" placeholder="stad">
            <input type="submit">
        </form>
        </section>
        <section class="landingspagina">
    <h1>vul hier niewe reis in</h1>
        </section>

        <section class="reis-formulier">
        <form class="reis" action="addreis.php" method="POST">
            <input type="text" name="reis" placeholder="reis">
            <input type="text" name="prijs" placeholder="prijs">
            <input type="text" name="datum" placeholder="datum" >
            <input type="text" name="vluchtid" placeholder="vluchtid" >
        
            <!--select id="vluchten" name="vluchten">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select-->
            
            
            <input type="submit">
        </form>
        </section>
        <section class="landingspagina">
    <h1>vul hier nieuwe vluchten in</h1>
        </section>

        <section class="reis-formulier">
        <form class="reis" action="addVlucht.php" method="POST">
            <input type="text" name="vluchtnummer" placeholder="vluchtnummer">
            <input type="text" name="reistijd" placeholder="geschatte reistijd">
            <input type="text" name="startplek" placeholder="startplek">
            <input type="text" name="eindplek" placeholder="eindplek">
            <input type="submit">
        </form>
        </section>

    </main>



    <?php
    include ("footer.php");
    ?>
</body>

</html>