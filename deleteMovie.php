<?php

require_once ("Database.php");
//include("Database.php");
try {
    $movie_id = filter_input(INPUT_POST, 'movie_id');

    $query = "DELETE FROM movie WHERE movieID = :movie_id";
    
    $statement = $db->prepare($query);
    $statement->bindValue(":movie_id", $movie_id);
    $statement->execute();
    $statement->closeCursor();

    /* Provide feedback that the record has been deleted */
    if ($statement->rowCount() > 0) {
        include('actors.php');
    } else {
        include('includes/header.php');
        echo "<p>RECORD NOT FOUND.</p>";
        echo '<h4><a href ="deleteMovieForm.php">Return</a></h4>';
        include('includes/footer.php');
    }
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
//echo '<h1><a href ="actors.php"> View Actors and Movies</a></h1>';
