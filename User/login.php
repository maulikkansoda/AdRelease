<?php 
session_start();
include 'connection.php';



if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = $con->query("select * from customer where Email='$email' and Password='$password'");

  $rowcount = $result->num_rows;

  if($rowcount==1)
  {
    $row = $result->fetch_object();

    $id = $row->Id;
    $Firstnameforsession = $row->Fname;


    $_SESSION["userid"] = $id;
    $_SESSION["Firstnameforsession"] = $Firstnameforsession;
    header("location:index.php");

  }
  else
  {
    echo "<script>alert('Invalid Email Or Password');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
   <?php include'common/header.php';?>

    <div class="unit-5 overlay" style="background-image: url('images/about/5.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Login</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Login</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
        <div class="col-md-12 col-lg-2 mb-5"></div>
          
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form method="post"  action="#" class="p-5 bg-white">

              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control"
                   value="<?php if (isset($_SESSION['email'])){echo $_SESSION['email'];}?>" placeholder="Email Address">
                </div>
              </div>

               <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Password</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Login" name="submit" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

              
              <a href="register.php" style="position: relative;left:100px; bottom: 50px">Not Registered Yet?</a>

<a href="forgot.php" style="position: relative;left:100px; bottom: 50px; float: right; margin-right: 100px;">Forgot Password.</a>

  
            </form>
          </div>

          
        </div>
      </div>
    </div>

   


    

    

    

    

    <?php include 'common/footer.php'?>
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>