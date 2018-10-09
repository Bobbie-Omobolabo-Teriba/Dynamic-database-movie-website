<!DOCTYPE html>
<?php
require ("Database.php");
try
{
$query = 'SELECT * FROM actor ORDER by actorName';
$statement = $db->prepare($query);
$statement->execute();
$actors = $statement->fetchAll();
$statement->closeCursor();

if (!isset($actor_id)) {
    $actor_id = filter_input(INPUT_GET, 'actor_id', FILTER_VALIDATE_INT);
    if ($actor_id == NULL || $actor_id == FALSE) {
        $actor_id = 1;
    }
}
if (!isset($movie_id)) {
    $movie_id = filter_input(INPUT_GET, 'movie_id', FILTER_VALIDATE_INT);
    if ($movie_id == NULL || $movie_id == FALSE) {
        $movie_id = 1;
    }
}
if (!isset($image_id)) {
    $image_id = filter_input(INPUT_GET, 'image_id', FILTER_VALIDATE_INT);
    if ($image_id == NULL || $image_id == FALSE) {
        $image_id = 1;
    }
}

$queryActor = "SELECT actorName FROM actor WHERE actorID = :actor_id";
$statement1 = $db->prepare($queryActor);
$statement1->bindValue(":actor_id", $actor_id);
$statement1->execute();
$actor = $statement1->fetch();
$actor_name = $actor["actorName"];
$statement1->closeCursor();

$queryMovies = "SELECT movie.movieID, movie.movieName, movie.movieGenre, movie.year, movie.movieRating, movie_actors.actorID, movie_actors.movieID "
        . "FROM movie, movie_actors WHERE movie_actors.movieID = movie.movieID AND movie_actors.actorID = :actor_id ";
$statement2 = $db->prepare($queryMovies);
$statement2->bindValue(":actor_id", $actor_id);
$statement2->execute();
$movies = $statement2->fetchAll();
$statement2->closeCursor();

$queryImage = "SELECT * FROM images";
$statement3 = $db->prepare($queryImage);
$statement3->bindValue(":image_id", $image_id);
$statement3->execute();
$images = $statement3->fetchAll();
$statement3->closeCursor();

$queryImage2 = "SELECT imageName FROM images";
$statement4 = $db->prepare($queryImage2);
$statement4->bindValue(":image_id", $image_id);
$statement4->execute();
$image = $statement4->fetch();
$statement4->closeCursor();
}
catch (PDOException $e) {
    include('constraint_error.php');
    exit();
}
?> 
<html>
    <?php
    include ("includes/header.php");
    ?>
    <main> 
        <br>
        <br>  
        <?php foreach ($images as $image): ?>
            <a><img class="photoIMG" src="IMG/<?php echo $image["imageName"]; ?>"></a>
        <?php endforeach; ?>
        <br>
        <br>
        <br>
        <h2 id="pageH1">Top Rated Actors</h2>
        <hr color=#9F0017">

        <div id="movieDiv">
            <br>
            <br>
            <table id="actorTable">
                <tr id="actorTr">
                    <th id="actorTh">Name</th>
                    <th id="actorTh">Country</th>
                </tr>
                <?php foreach ($actors as $actor): ?>
                    <tr>
                        <td id="actorTd">
                            <a id="actorLink" href ="actors.php.?actor_id=<?php echo $actor['actorID']; ?>">
                                <?php echo $actor['actorName']; ?>
                            </a> 
                        </td>
                        <td id="actorTd"><?php echo $actor['country']; ?></td>
                        <td id="UDtd">
                            <a id="actorsListUpdate1" href = "updateActorForm.php.?actor_id=<?php echo $actor['actorID']; ?>">Update Actor</a>
                        </td>
                        <td id="UDtd">
                            <a id="actorsListUpdate2" href = "deleteActor.php.?actor_id=<?php echo $actor['actorID']; ?>">Delete Actor</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
            <br>
            <br>
            <table>
                <tr>
                    <th><?php echo $actor_name ?> movies</th>
                    <th>Genre</th>
                    <th>Rating</th>
                    <th>Year</th>
                </tr>
                <?php foreach ($movies as $movie) : ?> 
                    <tr>

                        <td><?php
                            echo $movie['movieName'];
                            ?></td>
                        <td><?php
                            echo $movie['movieGenre'];
                            ?></td>
                        <td><?php
                            echo $movie['movieRating'];
                            ?></td>
                        <td><?php
                            echo $movie['year'];
                            ?></td>
                        <td id="UDtd">
                            <a  id="actorsListUpdate1" href = "deleteMovieActor.php?movie_id=<?php echo $movie['movieID'];?>&actor_id=<?php echo $actor_id ?>">Remove Movie</a>
                        </td>
                        <td id="UDtd">
                            <a  id="actorsListUpdate1" href = "updateMovieForm.php.?movie_id=<?php echo $movie['movieID']; ?>">Update Movie</a>
                        </td>
                    </tr><?php endforeach; ?>  
            </table>
            <br>
            <button onclick="window.location.href = 'addActorForm.php'">Add Actor</button>
            <button onclick="window.location.href = 'addMovieForm.php'">Add Movie</button>
            <button onclick="window.location.href = 'addMovieActorForm.php'">Movie + Actor</button>
            <button onclick="window.location.href = 'deleteMovieForm.php'">Delete Movie</button>
            <br>
            <br>
        </div>
        <br>
        <br>
    </main>
</body>
<?php
include ("includes/footer.php");
?>
</html>
