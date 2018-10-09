<!DOCTYPE html>
<?php
require_once ("Database.php");

try {

    $movie_id = filter_input(INPUT_POST, "movie_id");
    $title = filter_input(INPUT_POST, "title");
    $genre = filter_input(INPUT_POST, "genre");
    $rating = filter_input(INPUT_POST, "rating", FILTER_VALIDATE_FLOAT);
    $length = filter_input(INPUT_POST, "length", FILTER_VALIDATE_FLOAT);
    $year = filter_input(INPUT_POST, "year");

    $updateQuery = "UPDATE movie SET movieName=:title,movieGenre =:genre,movieRating =:rating, movieLength = :length WHERE movieID=:movie_id";
    $statement = $db->prepare($updateQuery);
    $statement->bindValue(":movie_id", $movie_id);
    $statement->bindValue(":title", $title);
    $statement->bindValue(":genre", $genre);
    $statement->bindValue(":rating", $rating);
    $statement->bindValue(":length", $length);
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

