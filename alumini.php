<!DOCTYPE html>
<html>

<head>
    <style>
        .alumni-profile {
        padding: 20px;
        max-width: 500px;
        display: inline;
        align-items: center;
        margin-right: 10%;
    }
    </style>
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">

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
                    <li><a href="About us.php">About</a></li>
                    <li><a href="alumini.php">Alumini</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contact us.php">Contact us</a></li>
                    
                    <li><a href="funds.php">Funds</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
   
    </main>
    <body>
        <?php
        // Connect to the MySQL database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "alumniphp";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // SQL query to retrieve alumni data
        $sql = "SELECT * FROM signup";
        $result = mysqli_query($conn, $sql);

        // Loop through the alumni data and generate profiles
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="alumni-profile">';
            echo '<div class="alumni-details">';
            echo '<h3>Reg No: ' . $row['id'] . '</h3>';
            echo '<h3>Name: ' . $row['f_name']. '</h3>';
            echo '<p>Email: ' . $row['email'] . '</p>';
            echo '<p>phone:' . $row['phone'].'</p>' ;
            echo '</div>';
            echo '</div>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
     

    </body>

</html>