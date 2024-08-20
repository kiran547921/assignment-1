<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">

</head>
<style>
    .email_text {
        width: 70%;
        margin: 0 auto;
        text-align: center;
        padding-top: 120px;
    }
    
    .email-bt {
        width: 100%;
        float: left;
        font-size: 18px;
        color: #393838;
        margin-bottom: 20px;
        padding: 10px 15px;
        border: 0px;
        border: 1px solid #2b2278 !important;
    }
    
    .massage-bt {
        width: 100%;
        float: left;
        font-size: 18px;
        color: #393838;
        margin-bottom: 20px;
        padding: 10px 15px;
        border: 0px;
        border: 1px solid #2b2278 !important;
    }
    
    .contact_section {
        width: 100%;
        float: left;
        padding-bottom: 90px;
    }
    
    .contact_taital {
        width: 100%;
        float: left;
        font-size: 40px;
        color: #363636;
        text-align: center;
        font-weight: bold;
    }
</style>

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
                    <li><a href="contact us.php">Contact Us</a></li>
                    <li><a href="funds.php">Funds</a></li>
                    <li><a href="index.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <body>
    <form action="?<php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="first">
            <div class="overlay">
                <div class="contact_section layout_padding">
                    <h1 class="contact_taital" style="color: aliceblue;">CONTACT US</h1>
                    <div class="email_text">
                        <form action="index.php" method="post">
                            <input type="text" class="email-bt" placeholder="Name" name="name1">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Phone Number" name="phone_no">
                        </div>
                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="massage-bt" placeholder="Message" rows="3" id="comment" name="msg"></textarea>
                        </div><br>
                        <p><button type="submit" ><marquee>SEND</marquee><p>
                    </div>
                </div>
                <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost", "root", "", "alumniphp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $name1 =  $_REQUEST['name1'];
        $phone_no= $_REQUEST['phone_no'];
        $email= $_REQUEST['email'];
        $msg= $_REQUEST['msg'];
       $sql = "INSERT INTO contactus(fname,phone,email,msg) VALUES ('$name1','$phone_no','$email','$msg')";
        $stmt = mysqli_prepare($conn, $sql);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>window.location.href = "new.html";</script>';

    }
        else{
           echo "invalid credentials";
        }
        // Close connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    ?>


</form>
            </div>

        </div>
        </div>
    </body>

</html>