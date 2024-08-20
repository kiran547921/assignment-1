<!DOCTYPE html>
<html lang="en">
<head>
</head>
<style>
    body {
    font-family: 'Roboto', sans-serif !important;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.mainscreen {
    min-height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    background-color: #DFDBE5;
    background-image: url("");
    color: #963E7B;
}

.card {
    width: 50rem; /* Adjust the width as needed */
    height: 45rem; /* Set height to auto for variable content */
    margin: auto;
    background: white;
    position: center;
    align-self: center;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display: flex;
    flex-direction: row;
}

.leftside {
    background: #030303;
    width: 20rem; /* Adjust the width as needed */
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.product {
    object-fit: cover;
    width: 100%; /* Ensure the image takes the full width of the container */
    height: 100%; /* Ensure the image takes the full height of the container */
    border-radius: 8px;
}

.rightside {
    background-color: #ffffff;
    width: calc(100% - 20rem); /* Adjust the width to ensure the right side takes up the remaining space */
    border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem 2rem 3rem 3rem;
}

h1, h2 {
    color: #333;
}

p {
    display: block;
    font-size: 1.1rem;
    font-weight: 400;
    margin: .8rem 0;
}

.inputbox {
    color: #030303;
    width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #615a5a;
    font-size: 1.1rem;
    font-weight: 500;
    outline: none;
}

.expcvv {
    display: flex;
    justify-content: space-between;
    padding-top: 0.6rem;
}

.expcvv_text {
    padding-right: 1rem;
}

.expcvv_text2 {
    padding: 0 1rem;
}

.button {
    background: linear-gradient(135deg, #753370 0%, #298096 100%);
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 400;
    font-size: 1.2rem;
    margin-top: 10px;
    width: 100%;
    letter-spacing: .11rem;
    outline: none;
    cursor: pointer;
}

.button:hover {
    transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
}

@media only screen and (max-width: 1000px) {
    .card {
        flex-direction: column;
        width: auto;
    }

    .leftside {
        width: 100%;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
        border-top-right-radius: 0;
        border-radius: 0;
    }

    .rightside {
        width: auto;
        border-bottom-left-radius: 1.5rem;
        padding: 0.5rem 3rem 3rem 2rem;
        border-radius: 0;
    }
}

</style>
<body>
    
    <div class="mainscreen">
        <!-- <img src="https://image.freepik.com/free-vector/purple-background-with-neon-frame_52683-34124.jpg" class="bgimg" alt="">-->
        <div class="card medium-card">
            <div class="leftside">
                <img
                    src="https://images.pexels.com/photos/7972506/pexels-photo-7972506.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    class="product"
                    alt="Fashion Item"
                />
            </div>
            <div class="rightside">
                <form method="post">
                    <h2>Payment Details</h2>
                    <p>User ID</p>
                    <input type="text" class="inputbox" name="name" required />
                    <p>Card Number</p>
                    <input type="number" class="inputbox" name="card_number" id="card_number" required />

                    <p>Card Type</p>
                    <select class="inputbox" name="card_type" id="card_type" required>
                        <option value="">--Select Card Type--</option>
                        <option value="Visa">Visa</option>
                        <option value="MasterCard">MasterCard</option>
                        <option value="AmericanExpress">American Express</option>
                    </select>
                    <br>
                        <p class="expcvv">FUND DONATING </p>
                        <input type="text" class="inputbox" name="fund" id="fund" required />
                    <div class="expcvv">
                        <p class="expcvv_text">Expiry Date</p>
                        <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

                        <p class="expcvv_text2">CVV</p>
                        <input type="password" class="inputbox" name="cvv" id="cvv" required />
                    </div>
                    <button type="submit" name="complete_purchase" class="button">DONATE</button>
                </form>
            </div>
        </div>
    </div>
<?php
        if (isset($_POST['complete_purchase'])){
        $conn = mysqli_connect("localhost", "root", "", "alumniphp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $reg_no =  $_REQUEST['name'];
        $c_number = $_REQUEST['card_number'];
        $c_type= $_REQUEST['card_type'];
        $cvv=$_REQUEST['cvv'];
        $fund=$_REQUEST['fund'];
        $sql = "SELECT * FROM purchase";
        $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if a matching user was found
    if (mysqli_num_rows($result) == 1) {
        echo '<script>alert("Successfully Donated")</script>';
        echo '<script>window.location.href = "home.php"</script>';
        header("Location: home.php/");
    } else {
       $sql1 = "INSERT INTO purchase (Regd_No, Card_Number, Card_Type, CVV,fund) VALUES ('$reg_no', '$c_number', '$c_type', '$cvv','$fund')";
        $stmt = mysqli_prepare($conn, $sql1);
    if (mysqli_stmt_execute($stmt)) {
        echo '<script>alert("Successfully Donated")</script>';
        echo '<script>window.location.href = "home.php"</script>';
        header("Location: home.php/");
    }
        else{ 
            echo '<script>alert("There is an error");</script>';
        }
    }        
        // Close connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        }
        ?>
</body>
</html>
