<!DOCTYPE html>
<?php
require_once ("Database.php");

try {
    $actor_id = filter_input(INPUT_POST, "actor_id");
    $name = filter_input(INPUT_POST, "name");
    $date = date('Y-m-d H:i', strtotime(filter_input(INPUT_POST, "date")));
    $country = filter_input(INPUT_POST, "country");

    $updateQuery = "UPDATE actor SET actorName=:name, birthDate =:date , country =:country WHERE actorID=:actor_id";
    $statement = $db->prepare($updateQuery);
    $statement->bindValue(":actor_id", $actor_id);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":date", $date);
    $statement->bindValue(":country", $country);
    $statement->execute();
    $statement->closeCursor();
    
    if ($statement->rowCount() > 0) {
        include('actors.php');
    }
} 
catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

//echo'<h3>You have Updated ' . $name . ' information</h3><h1><a href ="actors.php">Top Rated Actors</a></h1>';

