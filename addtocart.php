
<?php
include ('connection.php');

// Retrieve data from the form
$boeid = $_POST['reisid'];

// Fetch product details based on product_id
$sql = "SELECT * FROM reizen WHERE reisid = :reisid";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':reisid', $reisid);
$prepare->execute();
$product = $prepare->fetch();

// Check if the product already exists in the winkelmandje
$sql_check = "SELECT * FROM boekingen WHERE boek_id = :id";
$prepare_check = $conn->prepare($sql_check);
$prepare_check->bindParam(':id', $boekid);
$prepare_check->execute();

if ($prepare_check->rowCount() > 0) {
    // If the product already exists, increment the 'aantal' column by 1
    $sql_update = "UPDATE boekingen SET aantal = aantal + 1 WHERE boek_id = :id";
    $prepare_update = $conn->prepare($sql_update);
    $prepare_update->bindParam(':id', $boekid);
    $prepare_update->execute();
} else {
    // If the product doesn't exist, insert a new row
    $sql_insert = "INSERT INTO boekingen (reis_id, vluchtid, userid) VALUES (:reisid, :vluchtid, :userid, :aantal)";
    $prepare_insert = $conn->prepare($sql_insert);
    $prepare_insert->bindParam(':reisid', $product['reis_id']);
    $prepare_insert->bindParam(':vluchtid', $product['vluchtid']);
    $prepare_insert->bindParam(':userid', $product['userid']);
    $prepare_insert->bindParam(':hotelid', $product['hotelid']);
    
}

header('Location: index.php');

