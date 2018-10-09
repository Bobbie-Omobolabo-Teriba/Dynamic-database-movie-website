<?php

require_once ("Database.php");
//get value from form page, "routePlanner.php"

try {
    $movie_id = filter_input(INPUT_POST, "movie_id");
    $title = filter_input(INPUT_POST, "title");
    $genre = filter_input(INPUT_POST, "genre");
    $rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_FLOAT);
    $length = filter_input(INPUT_POST, "length", FILTER_VALIDATE_FLOAT);
    $year = filter_input(INPUT_POST, "year");

    $insertQuery = "INSERT INTO movie(movieID, movieName, movieGenre, movieRating,movieLength, year)"
            . "values(:movie_id, :title, :genre, :rating, :length, :year);";

    $statement = $db->prepare($insertQuery);
    $statement->bindValue(":movie_id", $movie_id);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":genre", $genre);
    $statement->bindValue(":rating", $rating);
    $statement->bindValue(":length", $length);
    $statement->bindValue(":year", $year);
    $statement->execute();
    $statement->closeCursor();
//
//
//$insertMovie ="INSERT INTO movie_actors(movieID,actorID) VALUES (:movie_id,:actor);";
//$statement1 = $db->prepare($insertMovie);
//$statement1->bindValue(":movie_id", $movie_id);
//$statement1->bindValue(":actor", $actor);
//$statement1->execute();
//$statement1->closeCursor();
    if ($statement->rowCount() > 0) {
        include('actors.php');
    }
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('Database_error.php');
    exit();
}
//
//echo '<h3>You have Inserted ' . $title . ' into the movies table</h3><h1><a href ="actors.php"> Return to actors list</a></h1>';
//echo '<br><h1><a href ="addMovieActorForm.php"> Add movie + actor</a></h1>';
//
// 