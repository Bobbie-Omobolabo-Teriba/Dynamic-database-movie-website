<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include ("includes/header.php");
    ?>

    <div id="sideNavBar"> 
        <ul>
            <li ><a  href="index.php">Home</a></li>
            <li ><a  href="#movieList">Top Rated Movies</a></li>
            <li ><a  href="actors.php">Top rated actors</a></li>
            <li ><a  href="addMovieActorForm.php">Insert Movie + Actor</a></li>
        </ul>
    </div>

    <div id="wrapper">
        <!-- Slider -->
        <div class="slider-wrapper futurico-theme">
            <div id="slider" class="nivoSlider">
                <img src="IMG/avengers.jpg" alt="" title="#caption1" />
                <img src="IMG/fightclub.jpg" alt="" title="#caption2"/>
                <img src="IMG/godfather.jpg" alt="" title="#caption3"/>
                <img src="IMG/inception.jpg" alt="" title="#caption4"/>
                <img src="IMG/ocean.jpg" alt="" title="#caption5"/>
                <img src="IMG/hateful.jpg" alt="" title="#caption6"/>
                <img src="IMG/lionking.jpg" alt="" title="#caption7"/>
                <img src="IMG/justiceL.jpg" alt="" title="#caption8"/>
                <img src="IMG/django.jpg" alt="" title="#caption9"/>
                <img src="IMG/seven.jpg" alt="" title="#caption10"/>
                <img src="IMG/incredibles.jpg" alt="" title="#caption11"/>
                <img src="IMG/pulpFiction.jpg" alt="" title="#caption12"/>
                <img src="IMG/sherlock.jpg" alt="" title="#caption13"/>
                <img src="IMG/scarface.jpg" alt="" title="#caption14"/>
            </div>
            <div>
                <div id="caption1" class="nivo-html-caption">
                    <strong>The Avengers </strong> <span></span> <em>2012</em>
                </div>
                <div id="caption2" class="nivo-html-caption">
                    <strong>Fight Club</strong> <span></span> <em>1999</em>
                </div>
                <div id="caption3" class="nivo-html-caption">
                    <strong>The Godfather</strong> <span></span> <em>1972</em>
                </div>
                <div id="caption4" class="nivo-html-caption">
                    <strong>Inception</strong> <span></span> <em>2010</em>
                </div>
                <div id="caption5" class="nivo-html-caption">
                    <strong>Ocean's 11</strong> <span></span> <em>2001</em>
                </div>
                <div id="caption6" class="nivo-html-caption">
                    <strong>The Hateful 8</strong> <span></span> <em>2015</em>
                </div>
                <div id="caption7" class="nivo-html-caption">
                    <strong>The Lion King</strong> <span></span> <em>1994</em>
                </div>
                <div id="caption8" class="nivo-html-caption">
                    <strong>Justice League</strong> <span></span> <em>2017</em>
                </div>
                <div id="caption9" class="nivo-html-caption">
                    <strong>Django Unchained</strong> <span></span> <em>2012</em>
                </div>
                <div id="caption10" class="nivo-html-caption">
                    <strong>Se7en</strong> <span></span> <em>1995</em>
                </div>
                <div id="caption11" class="nivo-html-caption">
                    <strong>The Incredibles</strong> <span></span> <em>2004</em>
                </div>
                <div id="caption12" class="nivo-html-caption">
                    <strong>Pulp Fiction</strong> <span></span> <em>1994</em>
                </div>
                <div id="caption13" class="nivo-html-caption">
                    <strong>Sherlock Holmes</strong> <span></span> <em>2009</em>
                </div>
                <div id="caption14" class="nivo-html-caption">
                    <strong>Scarface</strong> <span></span> <em>1983</em>
                </div>
            </div>
        </div>

    </div>
    
   
    
    
    
    
    <section id="movieList">
        <h1 id="pageH1">Top 10 Rated Movies</h1>
        <hr color=#9F0017">
        <div id="movieDiv">
            <br>
            <h4 class="movieNumber">1.</h4>
            <h4 class ="movieTitleHead">The Godfather</h4>
            <h5 class ="movieRate">9.2</h5>
            <img class="moviePoster" src="IMG/godfatherPoster.jpg" alt =""/>
            <p class ="movieDes">Widely regarded as one of the greatest films of all time, this mob drama, 
                based on Mario Puzo's novel of the same name, 
               focuses on the powerful Italian-American crime 
                family of Don Vito Corleone (Marlon Brando). When the don's youngest son, 
                Michael (Al Pacino), 
                reluctantly joins the Mafia, he becomes involved in the inevitable cycle of violence and betrayal.
            </p>
           
            <h4 class="movieNumber">2.</h4>
            <h4 class ="movieTitleHead">Pulp Fiction</h4>
            <h5 class ="movieRate">8.9</h5>
            <img class="moviePoster" src="IMG/pulpPoster.jpg" alt=""/>
            <p class ="movieDes">Vincent Vega (John Travolta) and Jules Winnfield (Samuel L. Jackson) 
                are hitmen with a penchant for philosophical discussions. 
                In this ultra-hip, multi-strand crime movie, their storyline is interwoven with those of their boss, 
                gangster Marsellus Wallace (Ving Rhames) ; 
                his actress wife, Mia (Uma Thurman) ; 
                struggling boxer Butch Coolidge (Bruce Willis) ; master fixer Winston Wolfe (Harvey Keitel) 
                and a nervous pair of armed robbers, "Pumpkin" (Tim Roth) and "Honey Bunny" (Amanda Plummer).
            </p>
            
            
            <h4 class="movieNumber">3.</h4>
            <h4 class ="movieTitleHead">Fight Club</h4>
            <h5 class ="movieRate">8.8</h5>
            <img class="moviePoster" src="IMG/fightclubPoster.jpg" alt =""/>
            <p class ="movieDes">A depressed man (Edward Norton) suffering from insomnia meets a strange soap salesman named 
                Tyler Durden (Brad Pitt) 
                and soon finds himself living in his squalid house after his perfect apartment is destroyed.
                The two bored men form an underground club 
                with strict rules and fight other men who are fed up with 
                their mundane lives. Their perfect partnership frays when 
                Marla (Helena Bonham Carter), 
                a fellow support group crasher, attracts Tyler's attention.
            </p>
            
            
            <h4 class="movieNumber">4.</h4>
            <h4 class ="movieTitleHead">Inception</h4>
            <h5 class ="movieRate">8.8</h5>
            <img class="moviePoster" src="IMG/inceptionPoster.jpg" alt=""/>
            <p class ="movieDes">Dom Cobb (Leonardo DiCaprio) is a thief with the rare ability to enter people's dreams 
                and steal their secrets from their subconscious. 
                His skill has made him a hot commodity in the world of corporate espionage but has also cost him everything he loves. 
                Cobb gets a chance at redemption when he is offered a seemingly impossible task: Plant an idea in someone's mind. If he succeeds, 
                it will be the perfect crime, but a dangerous enemy anticipates Cobb's every move.
            </p>
            
            
            <h4 class="movieNumber">5.</h4>
            <h4 class ="movieTitleHead">Se7en</h4>
            <h5 class ="movieRate">8.6</h5>
            <img class="moviePoster" src="IMG/sevenPoster.jpg" alt =""/>
            <p class ="movieDes">When retiring police Detective William Somerset (Morgan Freeman) tackles a final case 
                with the aid of newly transferred 
                David Mills (Brad Pitt), they discover a number of elaborate and grizzly murders. 
                They soon realize they are dealing with a 
                serial killer (Kevin Spacey) who is targeting people he thinks represent 
                one of the seven deadly sins. Somerset also befriends Mills' wife, 
                Tracy (Gwyneth Paltrow), who is pregnant and afraid to raise her child in the crime-riddled city.
            </p>
            
            
            <h4 class="movieNumber">6.</h4>
            <h4 class ="movieTitleHead">The Lion King</h4>
            <h5 class ="movieRate">8.5</h5>
            <img class="moviePoster" src="IMG/lionPoster.jpg" alt=""/>
            <p class ="movieDes">This Disney animated feature follows the adventures of the young lion Simba (Zoe Leader), 
                the heir of his father, Mufasa (Ernie Sabella). 
                Simba's wicked uncle, Scar (Rowan Atkinson), plots to usurp 
                Mufasa's throne by luring father and son into a stampede of wildebeests. 
                But Simba escapes, and only Mufasa is killed. Simba returns as an adult (Jeremy Irons) 
                to take back his homeland from 
                Scar with the help of his friends Timon (Jonathan Taylor Thomas) and Pumbaa (Cheech Marin).
            </p>
            
            
            <h4 class="movieNumber">7.</h4>
            <h4 class ="movieTitleHead">Django Unchained</h4>
            <h5 class ="movieRate">8.4</h5>
            <img class="moviePoster" src="IMG/djangoPoster.jpg" alt=""/>
            <p class ="movieDes">Two years before the Civil War, Django (Jamie Foxx), a slave, finds himself 
                accompanying an unorthodox German bounty hunter named 
                Dr. King Schultz (Christoph Waltz) on a mission to capture the vicious Brittle brothers. 
                Their mission successful, Schultz frees Django, 
                and together they hunt the South's most-wanted criminals. Their travels take them to 
                the infamous plantation of shady Calvin Candie 
                (Leonardo DiCaprio), where Django's long-lost wife (Kerry Washington) is still a slave.
            </p>
            
            
            <h4 class="movieNumber">8.</h4>
            <h4 class ="movieTitleHead">Scarface</h4>
            <h5 class ="movieRate">8.3</h5>
            <img class="moviePoster" src="IMG/scarfacePoster.jpg" alt=""/>
            <p class ="movieDes">After getting a green card in exchange for assassinating a Cuban government official, 
                Tony Montana (Al Pacino) stakes a claim on the 
                drug trade in Miami. Viciously murdering anyone who stands in his way, Tony eventually becomes the
                biggest drug lord in the state, 
                controlling nearly all the cocaine that comes through Miami. But increased pressure from the police, wars with Colombian drug 
                cartels 
                and his own drug-fueled paranoia serve to fuel the flames of his eventual downfall.
            </p>
            
            
            <h4 class="movieNumber">9.</h4>
            <h4 class ="movieTitleHead">The Avengers </h4>
            <h5 class ="movieRate">8.1</h5>
            <img class="moviePoster" src="IMG/avengersPoster.jpg" alt =""/>
            <p class ="movieDes">When Thor's evil brother, Loki (Tom Hiddleston), gains access to the unlimited power of 
                the energy cube called the Tesseract, 
                Nick Fury (Samuel L. Jackson), director of S.H.I.E.L.D., initiates a superhero recruitment effort to 
                defeat the unprecedented threat to Earth. 
                Joining Fury's "dream team" are Iron Man (Robert Downey Jr.), Captain America (Chris Evans), the Hulk (Mark Ruffalo), 
                Thor (Chris Hemsworth), the Black Widow (Scarlett Johansson) and Hawkeye (Jeremy Renner).
            </p>
            
            
           
            <h4 class="movieNumber">10.</h4>
            <h4 class ="movieTitleHead">The Incredibles</h4>
            <h5 class ="movieRate">8.0</h5>
            <img class="moviePoster" src="IMG/incrediblesPoster.jpeg" alt=""/>
            <p class ="movieDes">In this lauded Pixar animated film, married superheroes Mr. Incredible (Craig T. Nelson) 
                and Elastigirl (Holly Hunter) are forced to assume 
                mundane lives as Bob and Helen Parr after all super-powered activities have been banned by the government. 
                While Mr. Incredible 
                loves his wife and kids, he longs to return to a life of adventure, and he gets a chance when 
                summoned to an island to battle an 
                out-of-control robot. 
                Soon, Mr. Incredible is in trouble, and it's up to his family to save him.
            </p>
          
            <br>
            
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/sliderfile.js"></script>

    <script>
        $(window).load(function () {
            $('#slider').nivoSlider({
                effect: 'random',
                directionNavHide: false,
                pauseOnHover: true,
                captionOpacity: 1,
                prevText: '<',
                nextText: '>'
            });
        });
    </script>
   
</body>
<?php
include ("includes/footer.php");
?>
</html>
