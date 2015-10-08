<?php
session_start();
error_reporting(E_ALL);

$dsn = 'mysql:host=cgi.cs.duke.edu;port=3306;dbname=ch311;';
$username = 'ch311';
$password = 'qutjV6P_To4R';


try {
    $jomo = new PDO($dsn, $username, $password);

} catch(PDOException $e) {
    die('Could not connect to the database:<br/>' . $e);
}

$sqlq = "INSERT INTO Users (id, NetID, FirstName, LastName, Password) VALUES (:id, :NetID, :FirstName, :LastName, :Password)";
// $sql = "UPDATE Test SET stuff=:stuff WHERE id=:id";


$id = 4;
$NetID = "em123";
$FirstName = "Elon";
$LastName = "Musk";
$Password = "emusk101112";

$getready = $jomo->prepare($sqlq);

$getready->execute(array(':id' => $id,':NetID' => $NetID,':FirstName' => $FirstName, ':LastName' => $LastName, ':Password' => $Password));

echo "Entered data successfully\n";

?>