<?php
// Include the connection code (connection.php)
include('connection.php');

// Receive the form values via POST
$startplek = $_POST['startplek'];
$eindplek = $_POST['eindplek'];
$reistijd = $_POST['reistijd'];
$vluchtnummer = $_POST['vluchtnummer'];

// SQL query to insert data
$sql = "INSERT INTO vluchten (startplek, eindplek, reistijd, vluchtnummer) VALUES (:startplek, :eindplek, :reistijd, :vluchtnummer)";

// Prepare the SQL query
$statement = $conn->prepare($sql);

// Bind the values to the parameters in the SQL query
$statement->bindParam(':startplek', $startplek);
$statement->bindParam(':eindplek', $eindplek);
$statement->bindParam(':reistijd', $reistijd);
$statement->bindParam(':vluchtnummer', $vluchtnummer);

// Execute the prepared query
$statement->execute();

// Redirect to another page after the insertion is completed
header('Location: admin.php');

