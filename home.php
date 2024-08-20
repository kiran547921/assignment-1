
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni web</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    #down {
  margin-top: 100%;
  padding-bottom: 25%;
 } 
 </style>
<body>
    <nav>
        <header>
            <div class="logo">
                <img href="https://www.vignan.ac.in/" src="vignan logo white.png">
                <b><span id="element"></span></b>
                <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
                <script>
                    var typed = new Typed('#element', {
                        strings: ['VIGNAN UNIVERSITY', 'VFSTR', 'VIGNAN UNIVERSITY', 'VFSTR'],
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
                        <li><a href="contact us.php">Contact Us</a></li>
                        <li><a href="funds.php">Funds</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </nav>
    <div class="first">
        <div class="overlay">
            <h1 style="text-align: center;">WELCOME </h1>
           
        </div>
    </div>
    <!-- <div class="container news">
        <h2>Campus News</h2>
        <ul style="color: rgb(0, 0, 0); height: 300;">
            <li>Vignan university clinches prestigious QS-I diamond rating accreditation</li>
            <li> Vignans onam festival celebration</li>
            <li> Vignans University has achieved platinum rating in 6 departments, gold rating in 2 departments</li>
            <li>diamond rating in 1 department from the nine wings helping us achieve diamond rating accreditation with a score of 90 percent</li>
            <li> Welcome To The Best Private University in AP</li>
            <li> Vignan News Letter from January 2018 to December 2018 · Vignan News Letter from January 2019 to June 2019.</li>
        </ul>
    </div> -->

    <div class="container about">
        <h2>Events</h2>
        <ul style="color: rgb(0, 0, 0); height: 300;">
            <li><a href="https://vignan.ac.in/recentevents18/nirfreport.pdf">National workshop</a></li>
            <li> <a href="https://vignan.ac.in/recentevents18/World-water-day-2022.pdf">World water day</a></li>
            <li><a href="https://vignan.ac.in/recentevents18/World-water-day-2022.pdf">Womens Day</a></li>
            <li><a href="https://vignan.ac.in/recentevents18/World-water-day-2022.pdf">Nationals Science Day</a></li>
            <li><a href="https://vignan.ac.in/recentevents18/blooddonation22.pdf">Blood Donation Camp</a></li>
        </ul>
    </div>

    <div class="container events">
        <h2>Notice Boards</h2>
        <ul style="color: rgb(0, 0, 0); height: 300;">
            <li> Desktop publishing software like Aldus PageMaker including of Lorem Ipsum</li>
            <li> Many desktop publishing packages and web page editors now use</li>
            <li> Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</li>
            <li> Welcome To The Best Private University in MP</li>
            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
        </ul>
    </div>
    <div class="container contact">
        <div class="contact-image">
            <img src="about-img1.jpg" alt="Contact Image">
        </div>
        <div class="contact-content" style="color: #ffffff;">
            <h2>About Us</h2>
            <p style="color: #ffffff;">Welcome to VFSTR (Visionary Foundation for Science, Technology, and Research), where innovation meets excellence. Established in 20XX, VFSTR has been at the forefront of advancing knowledge and fostering technological breakthroughs. Our mission
                is to empower future generations through education, research, and innovation. We believe that by nurturing curious minds and providing them with the tools to explore, learn, and create, we can shape a brighter tomorrow. VFSTR is more than
                an institution; it's a community of educators, researchers, and learners united by the passion for pushing boundaries. Our commitment to excellence reflects in our diverse academic programs, cutting-edge research initiatives, and collaborations
                with industry leaders. We strive to create an environment that encourages intellectual growth and holistic development.</p>
            <a href="about us.php" class="btn">Learn More</a>
        </div>
    </div>
    <div class="rec">
        <center>
            <h1>Top Recruiters</h1>
        </center>

        <div class="responsive">
            <div class="gallery">
                <img src="wipro.png" style="height: 300px;">
                </a>
                <div class="desc">wipro</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <img src="hcl.jpeg" style="height: 300px;">
                </a>
                <div class="desc">HCL</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <img src="tcs.jpeg" style="height: 300px;">
                </a>
                <div class="desc">TCS</div>
            </div>
        </div>
        <div class="responsive">
            <div class="gallery">
                <img src="ama.jpeg" style="height: 300px;">
                </a>
                <div class="desc">Amazon</div>
            </div>
        </div>
        <center><br><br>
            <b><p>THE END</p></b><br><br>
        </center>
        <div style="padding:6px;">
        </div>
    </div>
    <footer>
        <div class="footer-content">
            <marquee behavior="" direction="left">
                <div class="copyright-section">
                    <p>&copy; 2023 VFSTR . All rights reserved | Designed by BATCH-2</p><br></marquee>
            </div>
        </div>
    </footer>
</body>

</html>