<?php
include ('connection.php');

function getvluchten($conn)
{
    $sql = "SELECT vluchtid, startplek, eindplek FROM vluchten";
    $prepare = $conn->prepare($sql);
    $prepare->execute();
    $vluchts = $prepare->fetchAll();

    foreach ($vluchts as $vlucht) {
        ?>
        <option value="<?php echo $vlucht['vluchtid']; ?>">
            <?php echo $vlucht['vluchtid'] . ' - ' . $vlucht['startplek'] . ' - ' . $vlucht['eindplek']; ?>
        </option>
        <?php
    }
}

function getStartplek($conn)
{
    $sql = "SELECT  land, stad FROM Locasties";
    $prepare = $conn->prepare($sql);
    $prepare->execute();
    $locaties = $prepare->fetchAll();

    foreach ($locaties as $locatie) {
        ?>
        <option value="<?php echo $locatie['vluchtid']; ?>">
            <?php echo  ' - ' . $locatie['startplek'] . ' - ' . $locatie['eindplek']; ?>
        </option>
        <?php
    }
}


function getReizen($conn)
{
    $sql = "SELECT * FROM reizen ";
    $prepare = $conn->prepare($sql);
    $prepare->execute();
    $reizen = $prepare->fetchAll();
    ?>
    <section class="reizen">
        <?php
        foreach ($reizen as $reis) {
            ?>
            <div class="reisblok">

                <img src="<?php echo $reis['img']; ?>" alt="<?php echo $reis['reisnaam'] ?>">

                <div class="tekstkant">
                    <h3>
                        <?php echo $reis['reisnaam'] ?>
                    </h3>
                    <p> <?php echo $reis['beschrijving'] ?> </p>
                    <p> € <?php echo $reis['prijs'] ?> </p>
                
                    <form action="getReis.php" method="POST">
                        <input name="reisid" type="hidden" value="<?php echo $reis['reisid']  ?>">
                        <input class="button" type="submit" value="meer info">
                    </form>
                </div>

            </div>

            <?php
        }
        ?>
    </section>
    <?php
}