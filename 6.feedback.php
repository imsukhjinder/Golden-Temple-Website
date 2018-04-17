<!DOCTYPE html>
<html lang="en">
  <head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				 <link href="assets/css/main.css" rel="stylesheet">
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Feedback </title>
    <style media="screen">
    .feed {
background-image: url(assets/images/backgrounds/4.jpg);
background-size: cover;
background-position: center center;
background-attachment: fixed;
padding: 15px;
padding-top: 69px; }

.mform {
padding: 45px;
border-radius: 20px;
background-color: rgba(0, 0, 0, 0.33);
border: solid 2px darkgoldenrod;
margin-bottom: 30px;
margin-top: 30px; }
.mform input, .mform textarea {
  border-radius: 10px;
  margin: 10px;
  padding: 5px;
  padding-left: 36px;
  width: 100%; }

.box1 {
display: flex;
flex-direction: column; }

.fform::before {
font-family: "FontAwesome";
position: absolute;
padding-left: 18px;
font-size: 27px;
padding-top: 9px;
color: #daa520; }

.name::before {
content: "\f007"; }

.email::before {
content: "\f0e0"; }

.pn::before {
content: "\f095"; }

.msg::before {
content: "\f040"; }

@media screen and (max-width: 342px) {
input {
  font-size: 12px; } }
  .btn
  {
    background-color: goldenrod;
    min-width: 150px;
    min-height: 40px;
    padding: 10px;
    border-radius: 10px;
    color:white;
    border: 2px solid darkgoldenrod;
    font-size: 20px;
    box-shadow: 0 26px 12px -10px darkgoldenrod;
    transition: 0.3s ease-in-out;
    margin-top: 20px;
    margin-bottom: 50px;
  font-family: 'Josefin Slab', serif;
  }
  .btn:hover
  {
    cursor: pointer;
    background-color: #efede9bf;
    border: 2px solid goldenrod;
    color: goldenrod;
    box-shadow: 0 26px 12px -20px darkgoldenrod;
  }
.fade{
  opacity: 1;
}
.modal-dialog {
  animation-name: animatetop;
    animation-duration: 0.4s;
    margin-top: 20%;
}
  .modal {
    background-color: #000000d4;
  }
  @keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}
    </style>
	</head>
<div class="loader">
	<center><div class="icon">
		<img src="assets/images/icons/10.gif" alt="sukhjinder singh webdeveloper">
	</div>
	<div class="load-text">
		<h1>It Will Take a While</h1>
		<h2>Please Wait...</h2>
	</div></center>
</div>
<?php include 'includes/1-menu.php'; ?>
<div class="feed">
  <div class="mhead" style="font-family:'Bellefair', serif; ">
    <center style="color:darkgoldenrod">
      <h1>Give Your Feedback</h1>
      <h3>or Ask any Query</h3>
  </div>
    <div class="mform">
      <div class="row">
        <div class="col-sm-6 box1">
					<form class="" action="7.error2.php" method="post">
          <div class="fform name">
							<input type="text" name="name" value="" placeholder="Your Name" id="name" required>
						</div>
						<div class="fform email">
							<input type="email" name="email" value="" placeholder="Your Email" id="email" required>
						</div>
						 <div class="fform pn">
							<input type="number" name="phone" value="" placeholder="Your Phone Number" id="call" required>
						 </div>
					</div>
					<div class="col-sm-6">
						<div class="fform msg">
								<textarea name="message" rows="9" cols="60" placeholder="Your Message" id="mess" required></textarea>
						</div>
								<input type="submit" name="contact_submit" value="Submit" class="btn" style="margin-bottom:0px;padding-left:0px;font-family:'Artifika', serif;width:50%;">
						</form>
      </div>
      </div>
    </div>
  </center>
</div>
<?php include 'includes/2-footer.php'; ?>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <div class="ermsg">Some text in the modal.</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="clsbtn">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/custom-script.js"></script>
</body>
</html>
