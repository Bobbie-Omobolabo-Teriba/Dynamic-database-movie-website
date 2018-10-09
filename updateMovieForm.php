<!DOCTYPE html>
<?php
require_once ("Database.php");

//get value from form page, "add_product_form.php
try {
    
    $movie_id = filter_input(INPUT_GET, 'movie_id', FILTER_VALIDATE_INT);
    
    $query = "SELECT * from movie WHERE movieID = :movie_id";
    $statement2 = $db->prepare($query);
    $statement2->bindValue(":movie_id", $movie_id);
    $statement2->execute();
    $statement2->closeCursor();
    $statement2->execute();
    ?>
<?php
while ($row = $statement2->fetch()) {

    $movie_id = $row["movieID"];
    $title = $row["movieName"];
    $genre = $row["movieGenre"];
    $length = $row["movieLength"];
    $rating = $row["movieRating"];
    $year = $row["year"];
}
    
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>
<html>
    <?php
    include ("includes/header.php");
    ?>
    <h1 id="pageH1">Update a movie on the List</h1>
    <main>
        <form action="updateMovie.php" method ="POST">
            <input type="hidden" name="movie_id" value="<?php echo $movie_id; ?>">
            <fieldset>
                <legend><h2>Movie Information</h2></legend>
                <label>Movie Title:</label>
                <input type="text" name="title" value ="<?php echo $title?>" required>
                <br>
                <br>
                <label>Genre:</label>
                <input type="text" name="genre" value ="<?php echo $genre?>" required>
                <br>
                <br>
                <label>Rating:</label>
                <input type="number" step="0.1" name="rating" value ="<?php echo $rating?>" required>
                <br>
                <br>
                <label>Length of the Movie:</label>
                <input type="number" step="0.01" name="length" value ="<?php echo $length?>" required>
                <br>
                <br>
                <label>Year it was published:</label>
                <input type ="text" name="year" value ="<?php echo $year?>" required>
            </fieldset>
            <br>
            <input id="inputButtons" type ="submit" name="submit" value="Submit" >
            <input id="inputButtons" type ="reset" name="reset" value="Reset">

        </form>
        <br>
    </main>
</body>
<?php
include ("includes/footer.php");
?>
</html>




