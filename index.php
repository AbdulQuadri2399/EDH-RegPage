<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/jquery-3.0.0.slim.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
	<script>
	function show(){
		opt = document.getElementById('class').value;
		document.getElementById('options').value = opt;
		}
	</script>
<style>
#footer i:hover{
	color:grey;
}
</style>
<title></title>
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered modal-sm ">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Get referral link</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
    <div class="col-lg-12">
	  <div class="form-group input-group mb-3 input-group-md">
	  <form>
	<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
	<div class="input-group-append">
	<button type="button" class="btn btn-outline-success btn-md">Get link</button>
	</div>
	</form>
  </div>
  
     <div class="form-group input-group input-group-md">
    <input type="text" class="form-control" id="ref" value="www.edh.com.ng?ref=Abdul" name="ref">
	<div class="input-group-append">
	<button type="button" class="btn btn-info btn-md">Copy</button>
	</div>
  </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>
</head>
<body>
<div class = "container">
<div class = "row">
<div class = "col">
<nav class="navbar navbar-expand-xl bg-light navbar-light fixed-top" style="border-bottom:2px solid orange;">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src = "Images/navbar_logo.png" class = "img img-fluid" height="50px" width="150px"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#sub">Subscribe!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>
</div>
</div>
<div class = "row" style="margin-top:80px; margin-bottom:20px;">
<div class = "col-lg-10">
	<div class ="text-center display-4">GET SMARTER IN JUST <b class= "display-3">5</b> MINUTES.
	</div>
</div>
</div>

<div class = "row">
	<div class = "col-lg-6 col-sm-12">
		<img src = "Images/img_1.svg" class = "img img-fluid">
	</div>
	<div class = "col-lg-4 col-sm-12">
	<div style="text-align:center; padding:20px;"><h3>Subscribe. Free!!!</h3></div>
		<form action="/action_page.php">
  <div class="form-group input-group-md">
    <input type="text" class="form-control" id="uname" placeholder="First Name" name="uname" required>
  </div>
  <div class="form-group input-group-md">
    <input type="email" class="form-control" id="email" placeholder="Email address" name="email" required>
  </div>
  <div class="form-group input-group mb-3 input-group-md">
    <select class="form-control" id="class" onchange="show()">
		<option>Working Class</option>
		<option>Student</option>
		<option>Others...</option>
		<input type="text" class="form-control" style="display:block;" id="options" name = "class">
	</select>
	<div class="input-group-append">
	<button type="button" class="btn btn-info btn-md">Go</button>
	</div>
  </div>
  <br>
  <span class="small">Already a subscriber?.</span>
  <button type="button" class="btn btn-outline-warning btn-md btn-block font-weight-bold" data-toggle="modal" 
  data-target="#myModal">Get your referral Link</button>
</form>

</div>	
	</div>
<div class = "row bg-light text-right" id = "footer" style="margin-top:40px;">

<div class = "col-lg-8 col-5 pt-3">
	<div class = "text-warning" style="font-size:24px; margin-bottom:15px;"><b>Company</b></div>
	
	<div class = "d-flex flex-column justify-content-between text-warning">
	<p style="font-size:17px;">Team</p>
	<p style="font-size:17px;">About Us</p>
	<p style="font-size:17px;">Contact Us</p>
	</div>
	</div>
	
	<div class = "col-lg-2 offset-1 col-5 pt-3">
	<div class = "text-primary" style="font-size:24px; margin-bottom:15px;"><b>Connect</b></div>
	
	<div class = "d-flex flex-row justify-content-between text-info">
	<i class="fa fa-whatsapp" style="font-size:20px;"></i>
	<i class="fa fa-twitter-square" style="font-size:20px;"></i>
	<i class="fa fa-linkedin-square" style="font-size:20px;"></i>
	<i class="fa fa-facebook-square" style="font-size:20px;"></i>
	<i class="fa fa-instagram" style="font-size:20px;"></i>
	</div>
	<br>
	<div class = "d-flex flex-column text-info text-align-left">
	<p style="font-size:12px;">economicsdirecthub@gmail.com</p>
	<p style="font-size:16px;">+2348163668951</p>
	</div>
	
	</div>
	
</div>
</div>
</body>
</html>

