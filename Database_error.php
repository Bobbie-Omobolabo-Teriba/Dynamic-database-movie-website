<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <body>
        <header><h1></h1></header>
        <main>
            <h1>Database Error</h1>
            <h2>PLEASE REMOVE MOVIE'S BEFORE DELETING ACTORS!</h2>
            <p>There was an error connecting to the database</p>
            <p>Check that the database is installed &amp; named correctly</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <h3><a href='actors.php'>Return</a></h3>
        </main>
    </body>
    <?php
    include ("includes/footer.php");
    ?>
</html>
