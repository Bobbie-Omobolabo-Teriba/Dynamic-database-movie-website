<!DOCTYPE html>
<?php
require_once ("Database.php");
//get value from form page, "add_product_form.php
try {
    
    $queryMovies = "SELECT * from movie";
    $statement2 = $db->prepare($queryMovies);
    $statement2->execute();
    $movies = $statement2->fetchAll();
    $statement2->closeCursor();
    
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
    <h1 id="pageH1">Select movie to delete</h1>
    <main>
        <form action="deleteMovie.php" method ="POST">
            <fieldset>
                <legend><h2>Select movie</h2></legend>
                <label>What's the movie?</label>
                <select name="movie_id">
                    <?php foreach ($movies as $movie) : ?> 
                        <option value="<?php echo $movie["movieID"] ?>"> 
                            <?php
                            echo $movie["movieName"];
                            ?>
                        </option>
                    <?php endforeach; ?> 
                </select>
            </fieldset>
            <br>
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




