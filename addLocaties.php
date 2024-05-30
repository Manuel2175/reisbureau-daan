<?php
include('connection.php');

$land = $_POST['land'];
$stad = $_POST['stad'];

$sql= "INSERT INTO locaties (land, stad ) VALUES(:land, :stad)";
$prepare = $conn->prepare($sql);
$prepare->bindParam(':land',$land); 
$prepare->bindParam(':stad',$stad); 
$prepare->execute();

header('Location: admin.php');

