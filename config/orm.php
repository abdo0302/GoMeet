<?php
require_once('connectDB.php');

// select par colum
function Select_id($condetion,$table){
     $sql="SELECT * FROM ".$table ." WHERE ".$condetion;
     return Requete($sql);
}

// insert
function insert($columns,$values,$table){
    $values = "'" . implode("','", explode(',', $values)) . "'";
    $sql="INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
    return Requete($sql);
}

// update
function update($update,$condition,$table){
    $sql="UPDATE ".$table." SET ".$update." WHERE ".$condition;
    return Requete($sql);
}

// delete
function delete($condition,$table){
    $sql="DELETE FROM ".$table." WHERE ".$condition;
    return Requete($sql);
}
?>