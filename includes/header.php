<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Backstage</title>
    <link href="CSS/main.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="CSS/shee1.css" media="screen"/>
    <link rel="stylesheet" href="css/shee2.css" media="screen"/>
    <link rel="icon" href="IMG/movieIcon.png">
    <script>
        $("#actorSection").click(function () {

            $('html, body').animate({
                scrollTop: $("#scroll").offset().top
            }, 1000);
        });
    </script>
    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>

</head>
<body>
    <header>
        <img id ="logo" src ="IMG/movieIcon.png" width="70">
        <a href ="index.php"><img id ="bsIcon" src ="IMG/bs.png" width="220"></a>
        <a href ="https://www.facebook.com" target="blank">
            <img id ="footerImg" src="IMG/facebook.png"></a>    
        <a href ="https://www.twitter.com" target="blank">
            <img id ="footerImg" src="IMG/twitter.png"></a>
        <a href ="https://www.gmail.com" target="blank">
            <img id ="footerImg" src="IMG/gmail.png"></a>
    </header>



