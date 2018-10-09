<?php

require_once ("Database.php");
//include("Database.php");
try {
    $actor_id = filter_input(INPUT_GET, 'actor_id', FILTER_VALIDATE_INT);

    $query = "DELETE FROM actor WHERE actorID = :actor_id";
    $statement = $db->prepare($query);
    $statement->bindValue(":actor_id", $actor_id);
    $statement->execute();
    $statement->closeCursor();

    /* Provide feedback that the record has been deleted */
    if ($statement->rowCount() > 0) {
        include('actors.php');
    } else {
        echo "<p>RECORD NOT FOUND.</p>";
    }
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

//echo '<h1><a href ="actors.php"> View Actors</a></h1>';
