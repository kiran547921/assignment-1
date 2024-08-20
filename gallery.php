<!DOCTYPE html>
<html>

<head>
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
    <style>
     body { 
  font-family: Avenir, sans-serif; margin: 0; 
  background-color: white;
}
div#quad { 
  padding: auto;
  background-color: #000; 
  font-size: 0; width: 60%; 
  margin: 0 auto;
  box-shadow: 0 0 12px rgba(0,0,0,0.8);
}
div#quad figure { 
  margin: 0; width: 50%; 
  height: auto; transition: 1s; 
  display: inline-block; 
  position: relative; overflow: hidden; 
}
div#quad figure:hover { cursor: pointer; z-index: 4; }
div#quad figure img { width: 100%; height: auto; }
div#quad figure:nth-child(1) { transform-origin: top left; }
div#quad figure:nth-child(2) { transform-origin: top right; }
div#quad figure:nth-child(3) { transform-origin: bottom left; }
div#quad figure:nth-child(4) { transform-origin: bottom right; }
div#quad figure figcaption { 
  margin: 0; opacity: 0; 
  background: rgba(0,0,0,0.3); 
  color: #fff; padding: .3rem; 
  font-size: 1.2rem; 
  position: absolute; 
  bottom: 0; width: 100%;
	transition: 1s 1s opacity; 
}
.expanded { transform: scale(2); z-index: 5;  }
div#quad figure.expanded figcaption { opacity: 1; }
div.full figure:not(.expanded) { pointer-events: none; }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img href="https://www.vignan.ac.in/" src="vignan logo white.png">
            <b><span id="element"></span></b>
            <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
            <script>
                var typed = new Typed('#element', {
                    strings: ['VIGNAN UNIVERSITY', 'VFSTR'],
                    typeSpeed: 50,
                });
            </script>
        </div>
        <div id="f1">
            <nav class="navigation">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="alumini.php">Alumni</a></li>
                    <li><a href="About us.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact us.php">Contact US</a></li>

                    <li><a href="funds.php">Funds</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <br>
    <div id="quad">
  <figure>
  <img src="images\IMG-20231116-WA0007.jpg" alt="rose-red-wine">
  <figcaption>Interaction with students</figcaption>
  </figure>
  <figure>
    <img src="images\IMG-20231116-WA0008.jpg" alt>
    <figcaption>Award Giving</figcaption>
  </figure>
  <figure>
    <img src="images\IMG-20231116-WA0010.jpg" alt>
    <figcaption>Independency Parade</figcaption>
  </figure>
  <figure>
    <img src="images\IMG-20231116-WA0015.jpg" alt>
    <figcaption>Techinical Fest</figcaption>
  </figure>
</div>
<br><br><br>
<div id="quad">
  <figure>
  <img src="images\IMG-20231116-WA0014.jpg" alt="rose-red-wine">
  <figcaption>Interaction with students</figcaption>
  </figure>
  <figure>
    <img src="images\IMG-20231116-WA0019.jpg" alt>
    <figcaption>Award Giving</figcaption>
  </figure>
  <figure>
    <img src="images\IMG-20231116-WA0017.jpg" alt>
    <figcaption>Independency Parade</figcaption>
  </figure>
  <figure>
    <img src="images\IMG-20231116-WA0021.jpg" alt>
    <figcaption>Techinical Fest</figcaption>
  </figure>
</div>
<script>var quadimages = document.querySelectorAll("#quad figure");
for(i=0; i<quadimages.length; i++) {
  quadimages[i].addEventListener('click', function(){ this.classList.toggle("expanded"); quad.classList.toggle("full") }); 
}</script>
</body>
</html>