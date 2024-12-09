<?php 
require_once("configDB.php");

function Requete($sql){
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed");
    }

    $resolt=$conn->query($sql);
    $conn->close();

    return $resolt;
    }

?>
