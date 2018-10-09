<?php
require_once ("Database.php");
//get value from form page, "routePlanner.php"
try {
    $actor_id = filter_input(INPUT_POST, "actor_id");
    $name = filter_input(INPUT_POST, "name");
    $date = date('Y-m-d H:i', strtotime(filter_input(INPUT_POST, "date")));
    $country = filter_input(INPUT_POST, "country");

    $insertQuery = "INSERT INTO actor(actorID, actorName, country, birthDate) values(:actor_id, :name, :country, :date);";
    $statement = $db->prepare($insertQuery);
    $statement->bindValue(":actor_id", $actor_id);
    $statement->bindValue(":name", $name);
    $statement->bindValue(":date", $date);
    $statement->bindValue(":country", $country);
    $statement->execute();
    $statement->closeCursor();
    
    if ($statement->rowCount() > 0) {
        include('actors.php');
    }
    
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('Database_error.php');
    exit();
}

//echo '<h3>You have Inserted ' . $name . ' to the list of top rated Actors</h3><h1><a href ="actors.php"> View Actors</a></h1>';
//
