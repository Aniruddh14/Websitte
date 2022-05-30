<?php
session_start();
$name=$_SESSION['User_id'];
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$address=$_SESSION['address'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TENANT</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/comman.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <div class="button-container col-6">
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                    </li>
                    <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal"> -->
                            <!-- <i class="fas fa-user"></i>Register -->
                        <!-- </a> -->
                    <!-- </li> -->
                    <!-- <div class="nav-vl"></div> -->
                    <!-- <li class="nav-item"> -->
                      <!-- <a class="nav-link" href="#" data-toggle="modal" data-target="#edit-modal"> -->
                          <!-- <i class="fas fa-user"></i>Tenants Details -->
                      <!-- </a> -->
                    <!-- </li> -->
                    <!-- <div class="nav-vl"></div> -->
                    <!-- <li class="nav-item"> -->
                        <!-- <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal"> -->
                            <!-- <i class="fas fa-sign-in-alt"></i>Login -->
                        <!-- </a> -->
                    <!-- </li> -->
                </ul>
            </div>
        </nav>
    </div>

    

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
           <!-- <li class="breadcrumb-item active" aria-current="page"> 
                <a href="index.html">Home</a>
            </li>-->
            <li class="breadcrumb-item">
                <a href="tenantsignin.php">Tenants</a> 
            </li> 
            <li class="breadcrumb-item">
                <a href="bunglowlogin.php">Bungalow</a> 
            </li> 
            <li class="breadcrumb-item">
                <a href="penthouse_login.php">PentHouse</a> 
            </li> 
        </ol>
    </nav>

    <div id="property-images" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#property-images" data-slide-to="0" class="active"></li>
            <li data-target="#property-images" data-slide-to="1" class=""></li>
            <li data-target="#property-images" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img\men\paved.jpg" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\men\front.jpg" alt="slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img\men\63651.5.jpg" alt="slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#property-images" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#property-images" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="property-summary page-container">
        <div class="row no-gutters justify-content-between">
        </div>
        <div class="detail-container">
            <div class="property-name">Ganpati Residence Flats</div>
            <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</div>
            <div class="property-address">For applying pay token amount if available the secretary will contact you.</div>
            <div class="property-address">If no availability or owner rejects application money will be refunded.</div>
        </div>
        <div class="row no-gutters">
            <!-- <div class="rent-container col-6"> -->
                <!-- <a href="owner.html" class="btn btn-primary">Home Owner</a>   -->
            <!-- </div> -->
            <div class="row no-gutters" align="right">
            <!-- <div class="rent-container col-6"> -->
                <!-- <a href="owner.html" class="btn btn-primary">Home Owner</a>   -->
            <!-- </div> -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <form id="payment_form">
                            <input type="hidden"   name="name" id="name" value="<?php echo $name;  ?>" maxlength="30" required>
                            <input type="hidden"  name="amt" id="amt" value="8500" maxlength="10" minlength="3" required>
                            <input type="hidden"  name="type" id="type" value="Flat" maxlength="10" minlength="3" required>
                            <input type="hidden"  name="phone" id="phone" value="<?php echo $phone;  ?>" maxlength="10" minlength="3" required>
                        <div class="button-container col-6">
                            <input type="button" class="btn btn-primary" id="btn" name="btn" value="Apply" onclick="pay_now()">
                        </div>
                    </form>
        </div>
    </div>

    <script>
        function pay_now(){
            var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        var type=jQuery('#type').val();
        var phone=jQuery('#phone').val();
         jQuery.ajax({
               type:'post',
               url:'payment_flat.php',
               data:"amt="+amt+"&name="+name+"&type="+type+"&phone="+phone,
               success:function(result){
                   var options = {
                        "key": "rzp_test_DUHXaQcH8wN9T9", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Ganpati Residence Flat",
                        "description": "Token Payment",
                        "image": "https://st.hzcdn.com/simgs/dc015e9709772b15_4-1700/home-design.jpg ",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_flat.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result){
                                   console.log('Thank YOu');
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
        
        
    } 
    </script>
    </div>

    <div class="property-amenities">
        <div class="page-container">
            <h1>Amenities</h1>
            <div class="row justify-content-between">
                <div class="col-md-auto">
                    <h5>Building</h5>
                    <div class="amenity-container">
                        <span>Power backup</span>
                    </div>
                    <div class="amenity-container">
                        <span>Lift</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Common Area</h5>
                    <div class="amenity-container">
                        <span>Wifi</span>
                    </div>
                    <div class="amenity-container">
                        <span>Sewage Tretment Plant</span>
                    </div>
                    <div class="amenity-container">
                        <span>Gym</span>
                    </div>
                    <div class="amenity-container">
                        <span>Sports Complex</span>
                    </div>
                    <div class="amenity-container">
                        <span>Comunity Hall</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Residence Type</h5>
                    <div class="amenity-container">
                        <span>Full Furnished Flats</span>
                    </div>
                    <div class="amenity-container">
                        <span>Parking Space</span>
                    </div>
                </div>

                <div class="col-md-auto">
                    <h5>Interior Type</h5>
                    <div class="amenity-container">
                       <span>Italian Kitchen</span>
                    </div>
                    <div class="amenity-container">
                      <span>Italian Washroom</span>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="property-about page-container">
        <h1>About the Property</h1>
        <p>Furnished studio apartment -! Located in posh area of Bijwasan in Delhi, this house is available for both bachelors and family. Go out with your new neighbores - catch a movie at the nearest cinema hall or just chill in a cafe which is not even 2 kms away. Unwind with your flatmates after a long day at work/college. With a common playground area and a shared Gym, Swimming pool, make your own FRIENDS/FAMILY moments. After all, there's always a Joey with unlimited supply of brotherhood. Remember, all it needs is one crazy story to convert a get together into a BFF. What's nearby/Your New Neighborhood 4.0 Kms from Dwarka Sector- 21 Metro Station.</p>
    </div>

    <div class="property-layout"></div>
        <div class="page-container">
            <h1>Residence Facilities</h1>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6">
                    <div class="Box3 row">
                        <div class="col-6">
                            <span class="criteria-text">Cleanlines</span>
                        </div>
                 </div>
                    <div class="Box3 row">
                        <div class="col-6">
                           <span class="criteria-text">Grocery Store</span>
                        </div>
                     </div>
                    <div class="Box3 row">
                        <div class="col-6">
                            <span class="criteria-text">Safety / Security</span>
                        </div>
                      </div>
                </div>
              </div>
        </div>
    </div>

    

    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="signup-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-university"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="Permanent_Adress" placeholder="Permanent Adress" maxlength="150" required>
                        </div>

                        <div class="form-group">
                            <span>I'm a</span>
                            <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Tennant
                            <label for="gender-male">
                            </label>
                            <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                            <label for="gender-female">
                                Home Owner
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="signup-heading">Delete / Display</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                  <form id="signup-form" class="form" role="form">
                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fas fa-user"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fas fa-phone-alt"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fas fa-envelope"></i>
                              </span>
                          </div>
                          <input type="email" class="form-control" name="email" placeholder="Email" required>
                      </div>
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Display Account</button>
                      </div>  

                      <div class="form-group">
                          <button type="submit" class="btn btn-block btn-primary">Delete Account</button>
                      </div>
                  </form>
              </div>

              <div class="modal-footer">
                  <span>Use Owner Key as Password /
                      <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                  </span>
              </div>
          </div>
      </div>
  </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-heading">Login TENANTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form id="login-form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                        to register a new account
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="page-container footer-container">
            
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>
