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
    <title>TENANTS Home</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/comman.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav"> 
                    <div class="button-container col-6">
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                </ul>
            </div>
        </nav>
    </div>


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
              <a href="#" data-toggle="popover" title="<?php echo $email ?>" data-content="<?php echo $phone ?>">Hi <?php echo $name ?></a>
            </li>
            <!-- <li class="breadcrumb-item active" aria-current="page"> -->
                  <!--  -->
            <!-- </li> -->
        </ol>
    </nav>
    <!--<script>
            $(document).ready(function(){
            $('[data-toggle="popover"]').popover();
            });
</script>-->
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Payment
                        </a>
                    </li>
                    <div class="nav-vl"></div> 
                      <li class="nav-item"> 
                           <a class="nav-link" href="#" data-toggle="modal" data-target="#edit-modal"> 
                           <i class="fas fa-user"></i>Profile Update 
                           </a>
                      </li> 
                    <div class="nav-vl"></div>
                      <li class="nav-item"> 
                           <a class="nav-link" href="#" data-toggle="modal" data-target="#new-modal"> 
                           <i class="fas fa-user"></i>Complains/Suggestions
                           </a>
                      </li> 
                    <div class="nav-vl"></div>
                    <li class="nav-item"> 
                           <a class="nav-link" href="#" data-toggle="modal" data-target="#rent-modal"> 
                           <i class="fas fa-user"></i>Put on rent
                           </a>
                      </li> 
                    <div class="nav-vl"></div>
                </ul>
            </div>
        </nav>
    </div>

    

    <div class="page-container">
        <div class="property-card row">
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name">Upcoming Events</div>
                    <div class="property-address"></div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent"></div>
                        <div class="rent-unit"></div>
                    </div>
                    <div class="button-container col-6">
                        <!--<a href="https://calendar.google.com/calendar/embed?src=en.indian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FKolkata" class="btn btn-primary">View</a>-->
                        <button id="toggle" class="btn btn-primary">View</button>
                       
                    </div>
                    <div id="third" >
                        <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FKolkata&src=anV5YWxhbmlydWRkaEBnbWFpbC5jb20&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%237986CB&color=%2333B679&color=%230B8043" style="border:solid 1px #777" width="700" height="400" frameborder="0" scrolling="no" ></iframe>
                        </div>
    
                        <script>
                            const targetDiv = document.getElementById("third");
                                const btn = document.getElementById("toggle");
                                targetDiv.style.display = "none";
                                btn.onclick = function () {
                                if (targetDiv.style.display !== "none") {
                                    targetDiv.style.display = "none";
                                } else {
                                    targetDiv.style.display = "block";
                                }
                                };
                            </script>
                </div>
            </div>
        </div>
        
        <div class="property-card row">
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name">List of workers</div>
                    <div class="property-address"></div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent"></div>
                        <div class="rent-unit"></div>
                    </div>
                    <div class="button-container col-6">
                    <button id="toggle1" class="btn btn-primary">View</button>
                    </div>
                    <div id="fourth" class="table-responsive" width="auto">
                        <table class="table table-striped" >
                            <thead>
                                <tr class="table-primary">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Duty</th>
                                <th scope="col">Phone No.</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php
                                    $db_hostname = "127.0.0.1";
                                    $db_username = "root";
                                    $db_password = "";
                                    $db_name = "website";

                                    $conn = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
                                    if (!$conn){
                                        echo "Connection failed".mysqli_connect_error();
                                        exit;
                                    }
                                    $selectquery = "select * from workers";
                                    $query = mysqli_query($conn,$selectquery);
                                    $num = mysqli_num_rows($query);


                                    while($res = mysqli_fetch_array($query)){
                                        ?>

                                        <tr>
                                        <th scope="row"><?php echo $res['workerid']; ?></th>
                                        <td><?php echo $res['name']; ?></td>
                                        <td><?php echo $res['duty']; ?></td>
                                        <td><?php echo $res['phone']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                            </tbody>
                            </table>
                    </div>
                    <script>
                            const targetDiv1 = document.getElementById("fourth");
                                const btn1 = document.getElementById("toggle1");
                                targetDiv1.style.display = "none";
                                btn1.onclick = function () {
                                if (targetDiv1.style.display !== "none") {
                                    targetDiv1.style.display = "none";
                                } else {
                                    targetDiv1.style.display = "block";
                                }
                                };
                            </script>
                </div>
            </div>
        </div>

        <!--<div class="property-card row">
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name">Pay Maintenance</div>
                    <div class="property-address"></div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent"></div>
                        <div class="rent-unit"></div>
                    </div>
                    <div class="button-container col-6">
                        <a href="#" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>-->
  

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
                        <span>Flat | Bungalow |Pent House</span>
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
                    <h5 class="modal-title" id="signup-heading">Maintenance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                <div class="modal-body">
                    <form id="payment_form" class="form" role="form">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text"  class="form-control" name="name" id="name" value="<?php echo $name;  ?>" maxlength="30" disabled="disabled" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="amt" id="amt" placeholder="Enter amount" maxlength="10" minlength="3" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fas fa-rupee-sign"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="flat" id="flat" placeholder="Flat no." maxlength="3" minlength="1" required>
                        </div>

                        <div class="form-group">
                            <input type="button" class="btn btn-block btn-primary" id="btn" name="btn" value="Pay Now" onclick="pay_now()">
                        </div>
                    </form>
                </div>

                <!--<div class="modal-footer">
                    <span>Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                    </span>
                </div>-->
            </div>
        </div>
    </div>
    <script>
        function pay_now(){
            var name=jQuery('#name').val();
        var amt=jQuery('#amt').val();
        var flat=jQuery('#flat').val();
         jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"amt="+amt+"&name="+name+"&flat="+flat,
               success:function(result){
                   var options = {
                        "key": "rzp_test_DUHXaQcH8wN9T9", 
                        "amount": amt*100, 
                        "currency": "INR",
                        "name": "Ganpati Residence Bungalow",
                        "description": "Maintenance Payment",
                        "image": "https://st.hzcdn.com/simgs/dc015e9709772b15_4-1700/home-design.jpg ",
                        "handler": function (response){
                           jQuery.ajax({
                               type:'post',
                               url:'payment_process.php',
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

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="signup-heading">Enter details where you want to change</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <div class="modal-body">
                  <form id="signup-form" class="form" role="form" method="post" action="update1.php">
                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fas fa-user"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" name="full_name" value="<?php echo $name; ?>" maxlength="30" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fas fa-phone-alt"></i>
                              </span>
                          </div>
                          <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>" maxlength="10" minlength="10" required>
                      </div>

                      <div class="input-group form-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text">
                                  <i class="fas fa-envelope"></i>
                              </span>
                          </div>
                          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" required>
                      </div>
                      <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" minlength="6" required>
                    </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Update Account</button>
                      </div>  
                  </form>
              </div>

              <!--<div class="modal-footer">
                  <span>Use Owner Key as Password /
                      <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
                  </span>
              </div>-->
          </div>
      </div>
  </div>
    



    <div class="modal fade" id="new-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Complaints</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <form id="email_form" class="form" role="form" action="https://formsubmit.co/1b7a088028e035e59ee8e2ca570b6d72" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-pencil-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="subject" placeholder="subject" maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="name" value="<?php echo $name ?>" maxlength="30" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-at"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="email" value="<?php echo $email ?>" maxlength="30" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="number" value="<?php echo $phone ?>" maxlength="10" minlength="10" required>
                        </div>
                        
                        <div class="input-group form-group">
                            <textarea name="Suggestion/Complain" placeholder="Complain" rows='6' column='100' style="width: 465px;" maxlength="250" minlength="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" value="Send">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="rent-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Put on rent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                <form id="rent_form" class="form" role="form" method="post" action="rent.php" >

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="name" value="<?php echo $name ?>" maxlength="30" required>
                        </div>
                        
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="number" value="<?php echo $phone ?>" maxlength="10" minlength="10" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-home"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="housing" placeholder="Housing type" maxlength="30" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-door-open"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="house_no" placeholder="Housing no" maxlength="30" required>
                        </div>


    
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" value="Send">Send</button>
                        </div>
                    </form>
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
