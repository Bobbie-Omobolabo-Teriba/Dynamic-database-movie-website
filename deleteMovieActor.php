<?php
require_once ("Database.php");
//include("Database.php");
try {

    $actor_id = filter_input(INPUT_GET, 'actor_id', FILTER_VALIDATE_INT);
    $movie_id = filter_input(INPUT_GET, 'movie_id', FILTER_VALIDATE_INT);

    $query = "DELETE FROM movie_actors WHERE actorID = :actor_id AND movieID = :movie_id";
    $statement = $db->prepare($query);
    $statement->bindValue(":actor_id", $actor_id);
    $statement->bindValue(":movie_id", $movie_id);
    $statement->execute();
    $statement->closeCursor();

    /* Provide feedback that the record has been deleted */
    if ($statement->rowCount() > 0) {
        require('actors.php');
    } else {
        echo "<p>RECORD NOT FOUND.</p>";
    }
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}

//echo '<h1><a href ="actors.php"> View Actors</a></h1>';
