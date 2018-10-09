
<!DOCTYPE html><html class=''>
    <?php
    include ("includes/header.php");
    ?>
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/marijoha/pen/EyKLWr?depth=everything&order=popularity&page=83&q=react&show_forks=false" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/6dc71dfee7.js"></script>

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<style>



.movielist {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  list-style: none;
  margin: 0 1em;
  padding: 0;
  padding-top: 2em;
}

.movie {
  width: 250px;
  margin: 0 .5em;
  padding: 1em;
  border: 1px solid lightgray;
  box-shadow: 0px 5px 15px 2px rgba(0, 0, 0, 0.3);
  -webkit-transition: .3s;
  transition: .3s;
  cursor: pointer;
  position: relative;
}
.movie h2 {
  font-size: 24px;
  padding-bottom: .5em;
}
.movie img {
  width: 100%;
}
.movie .watchNow, .movie .rateNow, .movie .doneRating {
  border: none;
  padding: 1em;
  margin-top: .5em;
  width: 100%;
  font-size: 14px;
  cursor: pointer;
  font-weight: 600;
  -webkit-transition: .3s;
  transition: .3s;
}
.movie .watchNow {
  background-color: lightgreen;
}
.movie .watchNow:hover {
  background-color: #a6f1a6;
}
.movie .doneRating {
  background-color: #eee;
}
.movie .rateNow {
  background-color: lightpink;
}
.movie .rateNow:hover {
  background-color: #ffd0d7;
}
.movie .movie-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.movie .stars {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-bottom: .75em;
}
.movie .stars p {
  font-size: 12px;
  color: #bbb;
}
.movie .stars i {
  padding: 0 .2em;
  color: purple;
}
.movie .footer {
  position: relative;
  width: 100%;
}
.movie .rateMovie {
  position: absolute;
  background-color: white;
  width: 100%;
  top: 0;
  left: 0;
  height: 65px;
  opacity: 0;
  z-index: -1;
  outline: none;
}
.movie .rateMovie ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 1em;
}
.movie .rateMovie ul li.selected .empty-star {
  color: purple;
}
.movie .rateMovie ul .empty-star {
  font-size: 30px;
  color: lightgray;
}
.movie .rateMovie ul .empty-star:hover {
  color: purple;
}
.movie .rateMovie.show {
  z-index: 3;
  opacity: 1;
}
</style>

</head><body>
<div class="app"></div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://fb.me/react-15.1.0.min.js'></script><script src='https://fb.me/react-dom-15.1.0.min.js'></script>
<script >"use strict";

var movieJSON = {
    movie1: {
    title: "Taken",
    image: "https://www.movieposter.com/posters/archive/main/77/MPW-38536",
    status: "not watched",
    rating: ""
  },
  movie2: {
    title: "Taken",
    image: "https://www.movieposter.com/posters/archive/main/77/MPW-38536",
    status: "not watched",
    rating: ""
  },
  movie3: {
    title: "Love Actually",
    image: "http://vignette3.wikia.nocookie.net/glee/images/9/9e/Love-actually-poster.jpg/revision/latest?cb=20121110180622",
    status: "not watched",
    rating: ""
  },movie4: {
    title: "Taken",
    image: "https://www.movieposter.com/posters/archive/main/77/MPW-38536",
    status: "not watched",
    rating: ""
  },movie5: {
    title: "Taken",
    image: "https://www.movieposter.com/posters/archive/main/77/MPW-38536",
    status: "not watched",
    rating: ""
  }
};

// <App />
var App = React.createClass({
  displayName: "App",

  getInitialState: function getInitialState() {
    return {
      movies: movieJSON
    };
  },
  addRating: function addRating(key, rate) {
    this.state.movies[key].rating = rate;
    this.setState({ movies: this.state.movies });
  },
  changeStatus: function changeStatus(key) {
    this.state.movies[key].status = "watched";
    this.setState({ movies: this.state.movies });
  },
  renderMovie: function renderMovie(key) {
    return React.createElement(Movie, { key: key, index: key, details: this.state.movies[key], addRating: this.addRating, changeStatus: this.changeStatus });
  },
  render: function render() {
    return React.createElement(
      "div",
      { "class": "container" },
      React.createElement(Header, null),
      React.createElement(
        "ul",
        { className: "movielist" },
        Object.keys(this.state.movies).map(this.renderMovie)
      )
    );
  }
});

// <Header />
var Header = React.createClass({
  displayName: "Header",

  render: function render() {
    return React.createElement(
      "div",
      { className: "header" },
      "React Movie List"
    );
  }
});

// <Movie /> li
// Title
// Image
// Watched status
var Movie = React.createClass({
  displayName: "Movie",

  getRating: function getRating(rating) {
    var stars = [];
    if (rating === '') {
      stars.push(React.createElement(
        "p",
        null,
        "Not yet rated"
      ));
    } else {
      for (var i = 0; i < rating; i++) {if (window.CP.shouldStopExecution(1)){break;}
        stars.push(React.createElement("i", { className: "fa fa-star star", "aria-hidden": "true" }));
      }
window.CP.exitedLoop(1);

    }
    return React.createElement(
      "div",
      null,
      stars
    );
  },
  handleClick: function handleClick(e) {
    var hasWatched = this.props.details.status === 'watched' ? true : false;
    if (!hasWatched) {
      this.props.changeStatus(this.props.index);
    } else {
      this.showRating(e.target);
    }
  },
  showRating: function showRating(target) {
    var rate = target.parentElement.children[0];rate.classList.add('show');
  },
  onButtonClick: function onButtonClick(e) {
    var key = this.props.index;
    var parent = e.target.parentElement.parentElement;
    parent.classList.toggle('selected');
    var rateStars = e.target.parentElement.parentElement.parentElement;
    var rating;
    for (var i = 0; i < rateStars.children.length; i++) {if (window.CP.shouldStopExecution(3)){break;}
      rateStars.children[i].classList.remove('selected');
      if (rateStars.children[i] === parent) {
        for (var j = 0; j < i + 1; j++) {if (window.CP.shouldStopExecution(2)){break;}
          rateStars.children[j].classList.add('selected');
        }
window.CP.exitedLoop(2);

        rating = i + 1;
        rateStars.parentElement.classList.remove('show');
      }
    }
window.CP.exitedLoop(3);

    this.props.addRating(key, rating);
  },
  render: function render() {
    var details = this.props.details;
    var hasWatched = details.status === 'watched' ? true : false;
    var hasRated = details.rating === "" ? false : true;
    var buttonText = hasWatched && hasRated ? 'Thanks for rating!' : hasWatched ? 'Rate Now' : 'Watch Now';
    var buttonClass = hasWatched && hasRated ? 'doneRating' : hasWatched ? 'rateNow' : 'watchNow';
    return React.createElement(
      "li",
      { className: "movie" },
      React.createElement(
        "div",
        { className: "movie-header" },
        React.createElement(
          "h2",
          null,
          details.title
        ),
        React.createElement(
          "div",
          { className: "stars" },
          this.getRating(details.rating)
        )
      ),
      React.createElement("img", { src: details.image }),
      React.createElement(
        "div",
        { className: "footer" },
        React.createElement(
          "div",
          { className: "rateMovie" },
          React.createElement(
            "ul",
            null,
            React.createElement(
              "li",
              null,
              React.createElement(
                "a",
                { onClick: this.onButtonClick },
                React.createElement("i", { className: "fa fa-star empty-star", "aria-hidden": "true" })
              )
            ),
            React.createElement(
              "li",
              null,
              React.createElement(
                "a",
                { onClick: this.onButtonClick },
                React.createElement("i", { className: "fa fa-star empty-star", "aria-hidden": "true" })
              )
            ),
            React.createElement(
              "li",
              null,
              React.createElement(
                "a",
                { onClick: this.onButtonClick },
                React.createElement("i", { className: "fa fa-star empty-star", "aria-hidden": "true" })
              )
            ),
            React.createElement(
              "li",
              null,
              React.createElement(
                "a",
                { onClick: this.onButtonClick },
                React.createElement("i", { className: "fa fa-star empty-star", "aria-hidden": "true" })
              )
            ),
            React.createElement(
              "li",
              null,
              React.createElement(
                "a",
                { onClick: this.onButtonClick },
                React.createElement("i", { className: "fa fa-star empty-star", "aria-hidden": "true" })
              )
            )
          )
        ),
        React.createElement(
          "button",
          { onClick: this.handleClick, disabled: hasRated, className: buttonClass },
          buttonText
        )
      )
    );
  }
});

ReactDOM.render(React.createElement(App, null), document.querySelector('.app'));
//# sourceURL=pen.js
</script>
</body>
<?php
include ("includes/footer.php");
?></html>