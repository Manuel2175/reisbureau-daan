<?php
require('connection.php');
$id = $_POST['reisid'];
$sql = "SELECT * FROM reizen WHERE reisid = :id";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':id', $id);
$prepare->execute();
$reizen = $prepare->fetchAll();

foreach ($reizen as $reis) {

}