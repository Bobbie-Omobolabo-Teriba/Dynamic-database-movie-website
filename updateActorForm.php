<!DOCTYPE html>
<?php
require_once ("Database.php");

try {
    $actor_id = filter_input(INPUT_GET, 'actor_id', FILTER_VALIDATE_INT);
    
    $queryMovies = "SELECT * from movie ORDER BY movieID";
    $statement2 = $db->prepare($queryMovies);
    $statement2->execute();
    $movies = $statement2->fetchAll();
    $statement2->closeCursor();

    $queryActor = "SELECT * FROM actor WHERE actorID =:actor_id";
    $statement1 = $db->prepare($queryActor);
    $statement1->bindValue(":actor_id", $actor_id);
    $statement1->execute();
    $statement1->closeCursor();
    $statement1->execute();
?>
<?php
while ($row = $statement1->fetch()) {

    $actor_id = $row["actorID"];
    $name = $row["actorName"];
    $country = $row["country"];
    $date = $row["birthDate"];
}
}catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>
<html>
    <?php
    include ("includes/header.php");
    ?>
    <h1 id="pageH1">Update an Actor on the List</h1>
    <main>
        <form action="updateActor.php" method ="POST">
            <input type="hidden" name="actor_id" value="<?php echo $actor_id; ?>">
            <fieldset>
                <legend><h2>Actor's Information </h2></legend>
                <label>Full Name:</label>
                <input type="text" name="name" value ="<?php echo $name ?>" required>
                <br>
                <br>
                <label>Place of Birth:</label>
                <input type="text" name="country" value = "<?php echo $country; ?>" required>
                <br>
                <br>
                <label>Date of Birth:</label>
                <input type ="date" name="date" value = "<?php echo $date; ?>" required>
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




