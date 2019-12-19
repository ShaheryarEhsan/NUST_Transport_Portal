<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

  <title>NUST Transport System</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://seeklogo.com/images/N/nust-logo-E161A9240F-seeklogo.com.PNG" type="image/vnd.microsoft.icon" />

  <style type="text/css">
     body { 
      background: url("img/bus.jpg") no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
 
  </style>
  <script type="text/javascript">

  function do_login(){
    var email=$("#inputEmail").val();
    var pass=$("#inputPassword").val();
    if(email!="" && pass!=""){
      $.ajax({type:'post',url:'do_login.php',data:{do_login:"do_login",email:email,password:pass},
        success:function(response){
         var soo = response.slice(1);
          if(soo=="success"){
            session(email, pass);
          }
          else{
            alert("Wrong Details");
          }
        }
      });
    }
    else{
      alert("Please Fill All The Details");
    }
    return false;
  }
    function session(email, pass){
      alert("success2");
       $.ajax({
                    type: 'post',
                    url: 'profilepage.php',

                    data: { user:'user',
                    email:email,
                    password:pass },

                    success: function(response)
                    {
                      
                       $.redirect('profilepage.php', {'user': 'user', 'email': email, 'password':pass});
                    }
                });
    }

</script>


</head>
<body >
  
<header>
 <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3"> 
          <h1 style="font-size:70px;text-align: center;color: white; margin-top:100px; text-shadow: 2px 2px 4px #000000;"> NUST Transport Portal</h1>
          <hr class="divider my-4">
          <h5 style="color:white;text-align: center; text-shadow: 2px 2px 4px #000000;"> Login to view your fee challans </h5>
        </div>
        <div class="col-lg-4 col-md-3"></div>
        <div class="col-lg-4 col-md-6" style=" margin-top:100px;"> 
          <div class="card card-login shadow-lg">
            <div class="card-header shadow mb-2 text-center">Login</div>
            <div class="card-body">
              <form method = "post" action="profilepage.php" onsubmit="return do_login();">
                <div class="form-group mt-3">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="remember-me">
                        Remember Password
                    </label>
                  </div>
                </div>
                <input class="btn btn-success btn-block" type="submit" name="login" value="Login" id="login_button">
                <a class="btn btn-danger btn-block" href="signup.php">Sign Up</a>
              </form>
            <div class="text-center">
              <a class="d-block small text-info mt-3" href="forgot-password.html">Forgot Password?</a>
              <a class="d-block small text-info mt-3" href="admin-page.html">Admin Page</a>
              <a class="d-block small text-info mt-3" href="index.html">Go back to Home?</a>
            </div>
          </div>
        </div>
      </div>
    </header>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="jquery.redirect.js"></script>
  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>
</body>