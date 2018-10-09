<!DOCTYPE html>
<html>
     <?php
    include ("includes/header.php");
    ?>
    <h1 id="pageH1">Add an Actor to the List</h1>
        <main>
            <form action="addActor.php" method ="POST">
                <fieldset>
                    <legend><h2>Actor's Information </h2></legend>
                <label>Full Name:</label>
                <input type="text" name="name" required>
                <br>
                <br>
                <label>Place of Birth:</label>
                <input type="text" name="country" required>
                <br>
                <br>
                <label>Date of Birth:</label>
                <input type ="date" name="date" required>
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




