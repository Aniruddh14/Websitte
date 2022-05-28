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
                    <li class="nav-item">
                    <div class="button-container col-6">
                        <a href="logout.php" class="btn btn-primary">Logout</a>
                    </div>
                    </li>
                    <!-- <div class="nav-vl"></div>  -->
                      <!-- <li class="nav-item">  -->
                        <!-- <a class="nav-link" href="#" data-toggle="modal" data-target="#edit-modal"> -->
                        <!-- <i class="fas fa-user"></i>Tenants Details  -->
                        <!-- </a>  -->
                      <!-- </li>  -->
                    <!-- <div class="nav-vl"></div>  -->
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
                            <i class="fas fa-user"></i>Profile Update
                        </a>
                      <li class="nav-item"> 
                           <a class="nav-link" href="#" data-toggle="modal" data-target="#edit-modal"> 
                           <i class="fas fa-user"></i>Queries
                           </a>
                      </li> 
                </ul>
            </div>
        </nav>
    </div>

    <div class="page-container">
        <div class="property-card row">
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name">Flats</div>
                    <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">Rs 8,500/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="flatlogin.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="property-card row">
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name">Bungalow</div>
                    <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">Rs 9,500/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="bunglowlogin.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="property-card row">
            <div class="content-container col-md-8">
                <div class="detail-container">
                    <div class="property-name">Pent House</div>
                    <div class="property-address">Police Beat, Sainath Complex, Besides, SV Rd, Daulat Nagar, Borivali East, Mumbai - 400066</div>
                </div>
                <div class="row no-gutters">
                    <div class="rent-container col-6">
                        <div class="rent">Rs 11,000/-</div>
                        <div class="rent-unit">per month</div>
                    </div>
                    <div class="button-container col-6">
                        <a href="penthouse_login.php" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
  

    </div>

    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signup-heading">Enter details where you want to update.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

               <div class="modal-body">
                    <form id="signup-form" class="form" role="form" method="post" action = "tenant_submit.php">
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

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-university"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="address" value="<?php echo $address; ?>" maxlength="150" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Update</button>
                        </div>
                    </form>
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
              <form id="email_form" class="form" role="form" action="https://formsubmit.co/1b7a088028e035e59ee8e2ca570b6d72" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
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
                            <textarea name="query" placeholder="Complain" rows='6' column='100' style="width: 465px;" maxlength="250" minlength="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary" value="Send">Send</button>
                        </div>
                    </form>
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
