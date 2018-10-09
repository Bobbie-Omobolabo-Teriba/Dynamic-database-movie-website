<?php

require_once ("Database.php");
//get value from form page, "routePlanner.php"
try {
    $actor_id = filter_input(INPUT_POST, "actor_id");
    $movie_id = filter_input(INPUT_POST, "movie_id");

    $insertQuery = "INSERT INTO movie_actors(actorID, movieID) values(:actor_id, :movie_id);";

    $statement = $db->prepare($insertQuery);
    $statement->bindValue(":actor_id", $actor_id);
    $statement->bindValue(":movie_id", $movie_id);
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

//echo '<h3>Information has been added into the database</h3><h1><a href ="actors.php"> View Movies and Actors</a></h1>';

