<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
<style>
     .button {
        background-color: orange;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 200px;
        cursor: pointer;
        border-radius: 10%;
      }
      a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
  color: aliceblue;
   }
      .button:hover {
        background-color: red;
      }
      .amount {
  font: 800 40px system-ui;
}
      body {
        font-family: 'sans', sans-serif;
      }
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
                    <li><a href="alumini.php">Alumini</a></li>
                    <li><a href="About us.php">About</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact us.php">Contact US</a></li>
                    <li><a href="funds.php">Funds</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <body>
    <div style="display: flex; justify-content: space-between;">
      <img src="fund.jpg" alt="Picture" style="width: 60%; height: auto;">
      <div style="display: flex; flex-direction: column; justify-content: center; align-items: flex-end;">
        <h1 style="text-align: right;  ">The future of my nation begins with my education.</h1>
        <button class="button"><a href="payment.php">Donate</a></button>
      </div>
    </div>
    <div class="amount">
        <p> Total Funds</p>
        <div id="value">10000</div>
    </div>
    <script>function animateValue(obj, start, end, duration) {
  let startTimestamp = null;
  const step = (timestamp) => {
    if (!startTimestamp) startTimestamp = timestamp;
    const progress = Math.min((timestamp - startTimestamp) / duration, 1);
    obj.innerHTML = Math.floor(progress * (end - start) + start);
    if (progress < 1) {
      window.requestAnimationFrame(step);
    }
  };
  window.requestAnimationFrame(step);
}

const obj = document.getElementById("value");
animateValue(obj, 1, 10000, 5000);</script>
    </body>