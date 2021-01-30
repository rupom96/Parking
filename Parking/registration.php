  <?php
include('conn_db.php');
if(isset($login_session))
{
header("Location: login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$username = mysqli_real_escape_string($obj->conn,$_POST['username']);
$name = mysqli_real_escape_string($obj->conn,$_POST['name']);
$password = mysqli_real_escape_string($obj->conn,$_POST['password']);
$phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
$email = mysqli_real_escape_string($obj->conn,$_POST['email']);
$vehicleno = mysqli_real_escape_string($obj->conn,$_POST['vehicleno']);
$vehicletype = mysqli_real_escape_string($obj->conn,$_POST['vehicletype']);
$role = mysqli_real_escape_string($obj->conn,$_POST['role']);
$address = mysqli_real_escape_string($obj->conn,$_POST['address']);
//$password = md5($password);


    $nameErr = $usernameErr = $phoneErr = $emailErr = $passwordErr = $vehicletypeErr = $vehiclenoErr = $roleErr = $addressErr = "";
    

   if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    trim($name);
    stripslashes($name);
    htmlspecialchars($name);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
  } if($_POST["username"] == "username"){
    $usernameErr =  "User Name already exists! TRY AGAIN!";
  } else {
    $username = $_POST["username"];
    trim($username);
    stripslashes($username);
    htmlspecialchars($username);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = $_POST["phone"];
    trim($_POST["phone"]);
    stripslashes($phone);
    htmlspecialchars($phone);
    // check if number has only numbers
    if (preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone) && strlen($phone) != 11 ) {
      $phoneErr = "Only Numbers are allowed!"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

    if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  }
    if (empty($_POST["role"]) or $_POST["role"] == "Role" ) {
    $roleErr = "Select your Role!";
  }
    if($_POST["role"] == "User" ){
        if (empty($_POST["vehicletype"]) or $_POST["vehicletype"] == "Select" ) {
            $vehicletypeErr = "vehicletype is required";
        }
        if (empty($_POST["vehicleno"])) {
            $vehiclenoErr = "Vehicle No is required";
        }
        $addressErr="Not Required.";
    }
    
    if($_POST["role"] == "Parking Owner" ){
        if (empty($_POST["address"])) {
    $addressErr = "Put Your Address.";
        }
        $vehicletypeErr = "Not Required.";
        $vehiclenoErr = "Not Required.";
    }
    
  


/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/


if($_POST['role'] == "User" ){
if( ($_POST['name'] && $_POST['username'] && $_POST['phone'] && $_POST['email'] && $_POST['password'] && $_POST['vehicleno'] && $_POST['vehicletype']) != NULL) {
    $sql = "INSERT INTO users(username,name,password,phone,email,vehicleno,vehicletype) VALUES ('$username', '$name', '$password', '$phone', '$email', '$vehicleno','$vehicletype')";
    $result = mysqli_query($obj->conn, $sql) /*or die(mysqli_error($sql)) */ ;
    echo "Registration Successfull!";
}else{
    echo "Registration Failed.";
}
}

if($_POST['role'] == "Parking Owner" ){
    if( ($_POST['name'] && $_POST['username'] && $_POST['phone'] && $_POST['email'] && $_POST['password'] && $_POST['address']) != NULL) {
    $sql2 = "INSERT INTO owners(username,name,password,phone,email,address) VALUES ('$username', '$name', '$password', '$phone', '$email', '$address')";
    $result = mysqli_query($obj->conn, $sql2) /*or die(mysqli_error($sql)) */ ;
    echo "Registration Successfull!";
}else{
    echo "Registration Failed.";
}
}





}
?>
<!DOCTYPE html>
<html lang="en"> 

<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>Parking Space Bangladesh - A Student Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Parking Space Bangladesh - A Student Project">
        <meta name="author" content="parkingspace">
        <link rel="shortcut icon" href="images/favicon.png" />

        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" >
        <link href="css/animate.css" rel="stylesheet" type="text/css" >
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" >
        <link href="css/venobox.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="css/styles.css" />

    <body> 

        <div id="preloader">
            <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
        </div>

     

        <header class="main-header clearfix" data-sticky_header="true">

            <div class="top-bar clearfix">

                <div class="container">

                    <div class="row">

                        <div class="col-md-8 col-sm-12">

                            <p>Welcome to Parking Space Bangladesh.</p>

                        </div>

                        <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>   
                        </div> 

                    </div>

                </div> 

            </div> 

            <section class="header-wrapper navgiation-wrapper">

                <div class="navbar navbar-default">         
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.html"><img alt="" src="images/cplogo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="drop">
                                    <a href="index.html" title="Home Layout 01">Home</a>
                                </li>
								<li><a href="login.php">Login</a></li>
                                <li><a href="about-us.html" title="About Us">About Us</a></li>

                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="registration.php">Registration</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> 





		

        <section class="section-booking">

            <div class="container wow fadeInUp">

                <div class="row">

                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> 

                        <figure class="booking-img">
                            <img src="images/cpppp.png" alt="booking image">
                        </figure>
                    </div> 


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 

                        <div class="booking-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Register</h3>



                            



                            <form action="registration.php" method="POST">





                            <form class="booking-form" name="registration"> 
                                <div class="form-group col-md-6">
								
                                    <input id="your_name" class="form-control" placeholder="Name" type="text" name="name">
                                    <span class="errorcolor"><?php global $nameErr; echo $nameErr; ?> </span>
                                </div>
                                <div class="form-group col-md-6">
								
                                    <input id="your_username" class="form-control" placeholder="User Name" type="text" name="username">
                                    <span class="errorcolor"><?php global $usernameErr; echo $usernameErr; ?> </span>
                                </div>
                                 <div class="form-group col-md-6">
							
                                    <input id="your_phone" class="form-control" placeholder="Phone" type="text" name="phone">
                                    <span class="errorcolor"><?php global $phoneErr; echo $phoneErr; ?> </span>
                                </div>
                                <div class="form-group col-md-6">
								 
                                    <input id="your_email" class="form-control" placeholder="Email" type="email" name="email">
                                    <span class="errorcolor"><?php global $emailErr; echo $emailErr; ?> </span>
                                </div>
								<div class="form-group col-md-6">
								
                                    <input id="your_password" class="form-control" placeholder="password" type="password" name="password">
                                    <span class="errorcolor"><?php global $passwordErr; echo $passwordErr; ?> </span>
                                </div>

                                    <div class="form-group col-md-6"> 
                                                                        
                                        <select class="form-control" placeholder="Role" name="role">
                                             Role:<br>
                                            <option>Role</option>
                                            <option>User</option>
                                            <option>Parking Owner</option>
                                        </select>
                                        <span class="errorcolor"><?php global $roleErr; echo $roleErr; ?> </span>
                                    </div>
								
                                <div class="form-group col-md-6">
								 Vehicle Type:<br>
                                    <div class="select-style"> 
                                    									
                                        <select class="form-control" placeholder="Vehicle Type" name="vehicletype">
                                            <p>Vehicle Type </p>
                                            <option>Select</option>
                                            <option>Bike</option>
                                            <option>Car</option>
                                            <option>Micro-Bus</option>
                                            <option>Mini-Truck</option>
                                            
                                        </select>
                                        <span class="errorcolor"><?php global $vehicletypeErr; echo $vehicletypeErr; ?> </span>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
								 Vehicle Number:<br>
                                    <input id="your_vehicle number" class="form-control" placeholder="Vehicle Number" type="text" name="vehicleno">
                                    <span class="errorcolor"><?php global $vehiclenoErr; echo $vehiclenoErr; ?> </span>
                                </div>

                                <div class="form-group col-md-6">
                                
                                    <input id="your_address" class="form-control" placeholder="Address" type="text" name="address">
                                    <span class="errorcolor"><?php global $addressErr; echo $addressErr; ?> </span>
                                </div>

                                
        

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit" name="submit">Register</button>
                                </div>

                            </form>

                        </div>

                    </div> 
                </div> 

            </div> 

        </section>  
		
		
		
		
		
		
		 <footer>            

            <section class="footer-widget-area footer-widget-area-bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <div class="about-footer">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <img src="images/cplogo.png" alt="" />
                                    </div> 

                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                        <p>
                                           Rent out your parking space
Make easy money by renting out your parking space. It‘s free to list and only takes a few minutes to get up and running.
                                        </p>
                                    </div> 

                                </div> 

                            </div> 
                        </div> 

                    </div> 

                  



                    <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">
                                <div class="sidebar-widget-wrapper">
                                    <div class="footer-widget-header clearfix">
                                        <h3>Join Us</h3>
                                    </div>
                                    <p>Find Parking When You Need It.</p>
                                    <div class="footer-subscription">
                                        
                                        <p>
                                            <a href="registration.php"><input class="btn btn-default" value="Register Now" type="submit"></a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div> 

                    <div class="col-md-4 col-sm-6 col-xs-12"></div> 
                        
                                                                  

                        <div class="col-md-4 col-sm-6 col-xs-12">

                            <div class="footer-widget">

                                <div class="sidebar-widget-wrapper">

                                    <div class="footer-widget-header clearfix">
                                        <h3>Contact Us</h3>
                                    </div>  


                                    <div class="textwidget">                                       

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">arnob.farshid@gmail.com</a><br/><a href="#"></a></p>

                                        <i class="fa fa-location-arrow fa-contact"></i> <p>Road-2,3/A Bashundhara<br/>Dhaka-1200, Bangladesh</p>

                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 1783923814<br/>Cell:&nbsp; (+880) 151711443</p>                              

                                    </div>

                                </div> 

                            </div> 
                        </div>  
   

                    </div> 

                </div> 

            </section> 

           

            <section class="footer-contents">

                <div class="container">

                    <div class="row clearfix">

                        <div class="col-md-6 col-sm-12">
                            <p class="copyright-text"> Copyright © 2018, Parking Space Bangladesh  </p>

                        </div> 

                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
										<li>
                                            <a href="request-blood.php">Login </a>
                                        </li>
                                        <li>
                                            <a href="registration.php">Registration</a>
                                        </li>
                                        
                                        <li>
                                            <a href="search.php">Search</a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div> 
                        </div> 

                    </div>                       

                </div> 

            </section> 

        </footer>

       

        <a id="backTop">Back To Top</a>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.backTop.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/waypoints-sticky.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/venobox.min.js"></script>
        <script src="js/custom-scripts.js"></script>
    </body>



</html>