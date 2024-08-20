<html>
<head>
<title style="color:aliceblue ;">registration form</title>
</head>
<style>
    body{	
	display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f2f2f2;
    }
    .container {
    width: 400px;
    padding: 50px;
    background-color: #ffffff;
    border: 3px solid #000000;
    text-align: center;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
	.signup-button {
    width: 100%;
    padding: 6px;
    background-color: #000000;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  	}
	  .reset {
    margin-top: 10px;
    font-size: 14px;
    text-align: right;
  }

</style>


<body>
<form action="?<php echo $_SERVER['PHP_SELF'];?>" method="post">
	<div class="container" >
		<table border="0" align="center">
			<h2 ALIGN="CENTER" style="color: rgb(0, 0, 0); ">REGISTRATION FORM</h2>

				<tr>
				<td><label for="name">First Name:</label></td>
				<td><input id="fname" maxlength="50" name="fname"  required type="text" /></td>
			</tr><tr></tr>
        	<tr> 
				<td><label for="name">Last Name: </label></td>
				<td><input id="lname" maxlength="50" name="lname" required
          	  type="text" /></td>
			</tr><tr></tr>
        	<tr>
				<td><label for="name">Login Id: </label></td>
				<td><input id="id" maxlength="50" name="id" required
           	 type="text" /></td>
			</tr><tr></tr>
        	<tr>
				<td><label for="Phone_No">Phone No: </label></td>
				<td><input id="phone" maxlength="10" name="phone"required
            	 type="tel" /></td>
			</tr><tr></tr>
        	<tr>
				<td><label for="Age">Age: </label></td>
				<td><input id="Age" maxlength="2" name="Age"required
            	value="" type="text" ></td>
			</tr><tr></tr>
			<tr>
        		<td>
             	       <label>Enter your gender:</label> 
            	</td>
				<td>
					<input type="radio" id="gender" name="gender"required value="male"/>Male 
         			<input type="radio" id="gender" name="gender"required value="female"/>Female     
         			<input type="radio" id="gender" name="gender"required value="others"/>others <br/>
				</td>
        	</tr><tr></tr>
        	<tr>
				<td><label for="email">Email Address:</label></td>
				<td><input id="email" maxlength="50" name="email"required type="text" /></td>
			</tr><tr></tr>
        
       		<tr>
				<td><label for="password">Password:</label></td>
				<td><input id="password" maxlength="8" name="password"required
					type="password" /></td>
			</tr><tr></tr>
        	<tr>
				<td><label for="password">Conform Password:</label></td>
				<td><input id="cpassword" maxlength="8" name="cpassword"required
					type="password" /></td>
			</tr><tr></tr>		
		</table>
     <input type="submit" value="submit"> 
		<p class="reset"><a href="registration form.html">Reset....</a></p>
		
	</div>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conn = mysqli_connect("localhost", "root", "", "alumniphp");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $f_name =  $_REQUEST['f_name'];
        $l_name = $_REQUEST['l_name'];
        $id = $_REQUEST['id'];
        $phone= $_REQUEST['phone'];
        $gender=$_REQUEST['gender'];
        $Age = $_REQUEST['Age'];
        $email= $_REQUEST['email'];
        $password=$_REQUEST['password'];
        $cpassword=$_REQUEST['cpassword'];
       $sql = "INSERT INTO signup(f_name,l_name,id,phone,Age,gender,email,password,cpassword) VALUES ('$f_name','$l_name','$id','$phone','$age','$gender','$email','$password','$cpassword')";
        $stmt = mysqli_prepare($conn, $sql);

    if (mysqli_stmt_execute($stmt)) {
        echo '<script>window.location.href = "index.php";</script>';

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
</body>


</html>