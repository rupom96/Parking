<?php
include('conn_db.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$emailusername = mysqli_real_escape_string($obj->conn,$_POST['emailusername']); 
$emailusername2 = mysqli_real_escape_string($obj->conn,$_POST['emailusername2']); 

$username = mysqli_real_escape_string($obj->conn,$_POST['username']);
$password = mysqli_real_escape_string($obj->conn,$_POST['password']); 
//$password = md5($password);

$sql="SELECT id FROM users WHERE username='$username'  and password='$password'";
$sql2="SELECT id FROM owners WHERE username='$username'  and password='$password'";

$result=mysqli_query($obj->conn,$sql);
$result2=mysqli_query($obj->conn,$sql2);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$row2=mysqli_fetch_array($result2,MYSQLI_ASSOC);

$active=$row['active'];
$count=mysqli_num_rows($result);

$active2=$row['active2'];
$count2=mysqli_num_rows($result2);


// If result matched $username and $username, table row must be 1 row
if($count==1)
{
$_SESSION['login_user'] = $emailusername;
$_SESSION['user_name_users'] = $username;
header("location: new_2.php");

}
else 
{
$error="Your Login Name or Password is invalid";
}

if($count2==1)
{
$_SESSION['login_user'] = $emailusername2;
$_SESSION['user_name_ows'] = $username;
header("location: buildingspot.php");

}
else 
{
$error="Your Login Name or Password is invalid";
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
        <meta name="author" content="parking">
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





		

        <section class="section-parking">

            <div class="container wow fadeInUp">

                <div class="row">

                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> 

                        <figure class="parking-img">
                            <img src="images/cpppp.png" alt="parking image">
                        </figure>
                    </div> 


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 

                        <div class="parking-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Login</h3>



                            



                            <form action="login.php" method="POST">





                            <form class="parking-form" name="login"> 
                              
                                 
                                <div class="form-group col-md-6">
								 
                                    <input id="your_username" class="form-control" placeholder="User Name" type="username" name="username">
                                </div>
                                <div class="form-group col-md-6">
                                 <input id="your_password" class="form-control" placeholder="password" type="password" name="password">
                                </div>

                                <div class="form-group col-md-6"> 
                                                                        
                                        <select class="form-control" placeholder="Role" name="role">
                                             Role:<br>
                                            <option>Role</option>
                                            <option>User</option>
                                            <option>Parking Owner</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                                
								
                                
                                

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit" name="submit">login</button>
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

                                        <i class="fa fa-phone fa-contact"></i> <p>Office:&nbsp; (+880) 1740140494<br/>Cell:&nbsp; (+880) 0723 161 343</p>                              

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
                                            <a href="buildingspot.php">Building</a>
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