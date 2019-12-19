<?php
session_start();

if(isset($_POST['user'])){
    $str = "Hello world!";
echo $str;
echo "<br>What a nice day!";
$em = $_POST["email"];
$pass = $_POST["password"];

echo $em;
$username = "root";
    $password = "";
    $database = "ntp";
    $mysqli = mysqli_connect("localhost", $username, $password, $database);

    $query = "SELECT * FROM `users` WHERE `email` LIKE '$em' AND `password` LIKE '$pass'";
    $select_data = mysqli_query($mysqli,$query);

    while($row = mysqli_fetch_array($select_data)) {
    echo print_r($row);


}
}


?>



<!DOCTYPE html>
<html>
<head>
	<title> Profile Page </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <link href="css/creative.min.css" rel="stylesheet">



<style type="text/css">
	


	body{
    background: -webkit-linear-gradient(left, #485461 0%, #28313b 74%);
}







.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
    z-index: 1;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}

#feedback{
	display: none;
	position: relative;
    left: 100%;
    top: -70%;
    background-color: white;
    z-index: 10;
    border-radius: 0.5rem;
}

.feedin{
    animation-name: toleft;
    animation-duration: 1.6s;
    -webkit-animation-name: toleft;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-duration: 1.6s;
}

@-webkit-keyframes toleft{
    0%{left: 100%}
    100%{left: 48%}
}

.feedout{
    animation-name: toright;
    animation-duration: 1.6s;
    -webkit-animation-name: toright;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-duration: 1.6s;
}

@-webkit-keyframes toright{
    0%{left:48%;}
    100%{left: 100%; display: none;}
}

#fbtn{
	position: relative;
	top: 40px;
}

@media screen and (max-width: 480px;){
	#feedback{left: 0%;}
}

</style>

</head>


<body>




     <nav class="navbar navbar-expand-lg py-3" id = "mainNav"  style="background-color: #28313b;">

      <a class="navbar-brand" href="#page-top"><img src="http://nust.edu.pk/SiteCollectionImages/logo_SEECS_1.PNG" style="width: 65px; margin-left: 20px"></a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> &#9776;</span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0 pr-4">
            <li class="nav-item">
                <a class="nav-link" href="index.html"><h5>Home</h5></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link js-scroll-trigger" href="#page-top"><h5>About Us</h5></a>
            </li>
          
          
            <li class="nav-item" style="margin-right: 40px">
                <a class="nav-link" href="login.html"><h5>Log Out</h5></a>
            </li>
        </ul>
       
      </div>
  </nav>
	<script type="text/javascript">
        function fbin(){
            document.getElementById('feedback').className = "feedin mb-4 col-md-6 col-sm-6 shadow-lg";
            document.getElementById('feedback').style.display = "block";
            document.getElementById('feedback').style.left = "48%" ;
            document.getElementById('fbtn').style.display = "none";
        }  
        function fbout(){
            document.getElementById('feedback').className = "feedout mb-4 col-md-6 col-sm-6 shadow-lg";
            document.getElementById('feedback').style.left = "100%" ;
            document.getElementById('feedback').style.display = "none";
            document.getElementById('fbtn').style.display = "block";
        }  
        
	</script>

	<div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="img/login_back.jpg" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h5>
                                    Talha Ikram
                                </h5>
                            
                                <h6>
                                    Student of SEECS, Third Year
                                </h6>
                                <p class="proile-rating">Van Fee (Per Month) : <span>Rs. 5300 /-</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Route</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>LINKS</p>
                        <a href="">Generate Challan Fee</a><br/>
                        <a href="">Change Route</a><br/>
                        <a href="">Cancel Transport</a>
                        
                        
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User ID</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>tikram.bese17seecs</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Talha Ikram</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>tikram.bese17seecs@seecs.edu.pk</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Phone</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>090078601</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Address</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>F6 Markaz, Near Mindanos, Islamabad</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Last Fee Paid?</label>
                                        </div>
                                        <div class="col-md-6">
                                            <i class="fas fa-check" style="color:green;"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Pending Dues</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>None</p>
                                        </div>
                                    </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    
                            <div class="row">
                                <div class="col-md-12">

                                    <label>Route</label><br/>
                                    <p>The van route from SEECS will be</p>
                                   <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJL2y4BHSW3zgRhayOCiTAxGI&destination=place_id:ChIJv5Yb53m_3zgReHcyt3Bz2tk&key=AIzaSyAMH2owBJLzLI_SN9cQn6sEjEtL6WTelqk" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>           
    </div>
    <!------------- FEEDBACK FORM STARTS HERE ------------------>
<div class="col-md-6 col-sm-1"></div>
<div class="mb-4 col-md-6 col-sm-6 shadow-lg" id="feedback">
    <div class="row">
        <div class="col-md-11"></div>
        <a class="btn" href="#" onclick="fbout()"><i class='fa fa-2x fa-close'></i></a>
    </div>
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Any Feedback?</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any suggestions on how we can improve our service? Send us a quick message and we'll see what we can do.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-dark text-light" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Transport Office, C2, NUST</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>0900 -78601</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <span>transport@nust.com</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-md-9 col-sm-8"></div>
	<div class="col-md-3 col-sm-4">
		<button class="btn btn-dark btn-lg" id="fbtn" onclick="fbin()">Got any feedback?</button>
	</div>
</div>

</body>
</html>