<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

  <title>NUST Transport System</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://seeklogo.com/images/N/nust-logo-E161A9240F-seeklogo.com.PNG" type="image/vnd.microsoft.icon" />
  <script src="script.js"></script>


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
    function getVal(){
      var x = document.getElementById("inputPassword").value;
      var y = document.getElementById("confirmPassword").value;
      return x.concat(',',y);
    }
  </script>

</head>

<body id="page-top">
  <header>
    <div class='container' style='margin-top: -20px;'>
      <div class='row'>
        <div class='col-lg-1 col-md-0'></div>
        <div class='col-lg-4 col-md-3' style='margin-top:100px;'>
          <h1 style='font-size:70px;text-align: center;color: white; margin-top:50px; text-shadow: 2px 2px 4px #000000;'> NUST Transport Portal</h1>
          <hr class='divider my-4'>
          <h5 style='color:white;text-align: center; text-shadow: 2px 2px 4px #000000;'> Login to view your fee challans </h5>
        </div>
        <div class='col-lg-2 col-md-4'></div>
        <div class='col-lg-5 col-md-5'>
          <div class='card card-register mt-5 shadow-lg'>
            <div class='card-header shadow text-center'>Register an Account</div>
            <div class='card-body'>
              <form class='mt-4' id='myForm' name='myForm' action='complete.php' method="post">
                <div class='form-group'>
                  <div class='form-row'>
                    <div class='col-md-6'>
                      <div class='form-label-group mb-1'>
                        <input type='text' id='firstName' name='firstName' class='form-control' placeholder='First name' required='required' autofocus='autofocus' onblur="validate('firstNameOut', this.value)">
                      </div>
                      <div id='firstNameOut'></div>
                    </div>
                    <div class='col-md-6'>
                      <div class='form-label-group mb-1'>
                        <input type='text' id='lastName' name="lastName" class='form-control' placeholder='Last name' required='required' onblur="validate('lastNameOut', this.value)">
                      </div>
                      <div id='lastNameOut'></div>
                    </div>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='form-row'>
                    <div class='col-md-6'>
                      <div class='form-label-group mb-1'>
                        <input type='text' id='phone' name="phone" class='form-control' placeholder='Phone Number' required='required' onblur="validate('phoneOut', this.value)">
                      </div>
                      <div id="phoneOut"></div>
                    </div>
                    <div class='col-md-6'>
                      <div class='form-label-group mb-1'>
                        <input type='text' id='cms' name="cms" class='form-control' placeholder='CMS ID' required='required' onblur="validate('cmsOut', this.value)">
                      </div>
                      <div id="cmsOut"></div>
                    </div>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='form-label-group'>
                    <input type='email' id='inputEmail' name="inputEmail" class='form-control' placeholder='Email address' required='required' onblur="validate('inputEmailOut', this.value)">
                  </div>
                  <div id="inputEmailOut"></div>
                </div>
                <div class='form-group'>
                  <div class='form-label-group'>
                    <label for="address">Select address area:</label>
				  	<select class="form-control" id="address" name="address">
					    <option>F6, Islamabad</option>
					    <option>F7, Islamabad</option>
					    <option>G9, Islamabad</option>
					    <option>G11, Islamabad</option>
					    <option>Westridge, Rawalpindi</option>
					    <option>Askari 13, Rawalpindi</option>
					    <option>DHA, Islamabad</option>
					    <option>Bahria Town, Islamabad</option>
				 	</select>
                  </div>
                  <div id="addressOut"></div>
                </div>
                <div class='form-group'>
                  <div class='form-row'>
                    <div class='col-md-6'>
                      <div class='form-label-group mb-1'>
                        <input type='password' id='inputPassword' name='inputPassword' class='form-control' placeholder='Password' required='required' onblur="validate('passwordOut', this.value)">
                      </div>
                      <div id="passwordOut"></div>
                    </div>
                    <div class='col-md-6'>
                      <div class='form-label-group mb-1'>
                        <input type='password' id='confirmPassword' class='form-control' placeholder='Confirm password' required='required' onblur="validate('passwordReOut', getVal())">
                      </div>
                      <div id="passwordReOut"></div>
                    </div>
                  </div>
                </div>
                <input class='btn btn-danger btn-block mt-5' type='button' value='submit' onclick='checkForm()'>
              </form>
              <div class='text-center'>
                <a class='d-block small mt-3 text-info' href='login.php'>Login Page</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>