
<!DOCTYPE html>
 <html lang="en"> 

<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
        <meta charset="utf-8">
        <title>Parking Space Bangladesh - A Student Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Parking Space Bangladesh - A Student Project">
        <meta name="author" content="Parking Space">
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
								
                                <li><a href="about-us.html" title="About Us">About Us</a></li>

                                <li><a href="contact.html">Contact</a></li>
                                
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

        </header> 


        <section class="section-booking">

            <div class="container wow fadeInUp">

                <div class="row">
  <!--
                    <div class="col-lg-6 col-md-6 hidden-sm hidden-xs"> 

                        <figure class="booking-img">
                            <img src="images/cpppp.png" alt="booking image">
                        </figure>
                    </div>   -->
					
					
					
					
					
							<div class="col-sm-6 wow fadeInRight">

                       <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script>
      function writeAddressName(latLng) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
          "location": latLng
        },
        function(results, status) {
          if (status == google.maps.GeocoderStatus.OK)
            document.getElementById("address").innerHTML = results[0].formatted_address;
          else
            document.getElementById("error").innerHTML += "Unable to retrieve your address" + "<br />";
        });
      }

      function geolocationSuccess(position) {
        var userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        // Write the formatted address
        writeAddressName(userLatLng);

        var myOptions = {
          zoom : 16,
          center : userLatLng,
          mapTypeId : google.maps.MapTypeId.ROADMAP
        };
        
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
 
        new google.maps.Marker({
          map: mapObject,
          position: userLatLng
        });
     
        var circle = new google.maps.Circle({
          center: userLatLng,
          radius: position.coords.accuracy,
          map: mapObject,
          fillColor: '#0000FF',
          fillOpacity: 0.5,
          strokeColor: '#0000FF',
          strokeOpacity: 1.0
        });
        mapObject.fitBounds(circle.getBounds());
      }

      function geolocationError(positionError) {
        document.getElementById("error").innerHTML += "Error: " + positionError.message + "<br />";
      }

      function geolocateUser() {
       
        if (navigator.geolocation)
        {
          var positionOptions = {
            enableHighAccuracy: true,
            timeout: 10 * 1000 
          };
          navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, positionOptions);
        }
        else
          document.getElementById("error").innerHTML += "Your browser doesn't support the Geolocation API";
      }

      window.onload = geolocateUser;
    </script>
    <style type="text/css">
      #map {
        width: 500px;
        height: 500px;
      }
    </style>
    <div id="map"></div>
    <p><b>Address</b>: <span id="address"></span></p>
    <p id="error"></p>


                        <!--<div class="section-google-map-block wow fadeInUp">
                        
                             <div id="map_canvas"></div>
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.265022759155!2d90.42665865000001!3d23.8162429!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2sNorth+South+University!5e0!3m2!1sen!2sbd!4v1525597171403" width="1150" height="450" frameborder="0" style="border:0" ></iframe>
                        </div>    -->                         

                    </div> 
					
					
					
					
					
					
					


                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> 

                        <div class="booking-form-wrapper text-center clearfix">
                            <h3 class="join-heading">Search Parking Space</h3>   


							
							
							
							
					
















          <form action="search1.php" method="POST">



                            <form class="booking-form">
                                
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="bloodgroup">
                                            <option>Time Slot</option>
                                            <option>Office Hour</option>
                                            <option>Night Parking</option>
                                           
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="select-style">                                    
                                        <select class="form-control" name="city">
                                            <option>Area</option>
                                            <option>Bashundhara</option>
                                            <option>Uttara</option>
                                            <option>Mirpur</option>
                                            <option>Gulshan</option>
                                            <option>Banani</option>
                                            <option>Nikunja</option>
                                            <option>Niketon</option>
                                        </select>
                                    </div>
                                </div>
        

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <button id="btn_submit" class="btn-submit" type="submit" name="submit">Search Parking Space</button>
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
                                    <p>Find Parking When You Need It,Earn Money When You Don't.</p>
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

                                        <i class="fa fa-envelope-o fa-contact"></i> <p><a href="#">pavel.alam09@gmail.com</a><br/><a href="#">pavel@gmail.com</a></p>

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