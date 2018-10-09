<!DOCTYPE html>
<?php
require_once ("Database.php");

//get value from form page, "add_product_form.php
try {
    
    $actor_id = filter_input(INPUT_GET, 'actor_id', FILTER_VALIDATE_INT);
    
    $queryActors = "SELECT * from actor";
    $statement2 = $db->prepare($queryActors);
    $statement2->bindValue(":actor_id", $actor_id);
    $statement2->execute();
    $actors = $statement2->fetchAll();
    $statement2->closeCursor();
    
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    exit();
}
?>
<html>
    <?php
    include ("includes/header.php");
    ?>
    <h1 id="pageH1">Add a movie to the List</h1>
    <main>
        <form action="addMovie.php" method ="POST">
            <fieldset>
                <legend><h2>Movie Information</h2></legend>
                <label>Movie Title:</label>
                <input type="text" name="title"  required>
                <br>
                <br>
                <label>Genre:</label>
                <input type="text" name="genre" required>
                <br>
                <br>
                <label>Rating:</label>
                <input type="number" step="0.1" name="rating" required>
                <br>
                <br>
                <label>Length of the Movie:</label>
                <input type="number" step="0.01" name="length" required>
                <br>
                <br>
                <label>Year it was published:</label>
                <input type ="text" name="year" required>
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




