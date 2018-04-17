<!DOCTYPE html>
<html lang="en">
  <head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				 <link href="assets/css/main.css" rel="stylesheet">
		<title>Golden Temple</title>
    <style media="screen">
video {
position: fixed;
width: 100vw;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
min-width: 100%;
min-height: 60vh;
width: auto;
height: auto;
z-index: 2; }

.herotext {
font-size: 75px;
z-index: 3;
width: 444px;
margin-top: 19%;
margin-bottom: 100px; }

.layer {
width: 100%;
height: 100%;
color: white;
background-color: rgba(211, 175, 95, 0.45);
z-index: 4;
position: absolute; }

@media screen and (max-width: 1050px) {
video {
 top: 33% !important; }
.herotext {
 hermaarrrgin-top: 30% !important;
 margin-bottom: 20% !important; } }

 @media screen and (max-width: 435px) {
   .herotext {
     width: 240px !important;
     font-size: 25px !important; } }
/* history section index page */
.history {
position: absolute;
z-index: 4;
background-color: white;
width: 100%;
margin-top: 45%;
background-image: url(assets/images/backgrounds/3.jpg); }
.logo img {
max-width: 300px;
max-height: 400px;
margin-bottom: 12px; }
.headimg {
margin-top: 50px; }
@media screen and (max-width: 840px) {
.history {
 margin-top: 66% !important; } }
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
.text{
font-family: 'Noto Sans',sans-serif;
word-spacing: 3px;
margin-left: 30px;
margin-right: 30px;
}
    </style>
	</head>
  <body>
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
<div id="hero"><?php include 'includes/2-hero1.php'; ?></div>
<section class="history" >
  <div class="container">
    <div class="logo">
        <center><img src="assets/images/icons/2a.png" alt="sukhjinder singh " class="headimg"></center>
      <center><img src="assets/images/icons/1a.png" alt="sukhjinder"></center>
      <center><div class="text" >
        <b>The Harmandir Sahib also Darbar Sahib and informally referred to as the "Golden Temple" is the holiest Sikh gurdwara located in the city of Amritsar, Punjab, India. The city was founded in 1574 by the fourth Sikh guru, Guru Ram Das. The Harmandir Sahib was designed by the fifth guru, Guru Arjan, who had the cornerstone laid by the Muslim Sufi saint Sai Hazrat Mian Mir on 28 December 1588. Guru Arjan completed the Adi Granth, the holy scripture of Sikhism, in 1604 and installed it in the gurdwara. There are four doors to get into the Harmandir Sahib, which symbolize the openness of the Sikhs towards all people and religions.The present-day gurdwara was rebuilt in 1764 by Jassa Singh Ahluwalia with the help of other Sikh Misls. In the early nineteenth century, Maharaja Ranjit Singh secured the Punjab region from outside attack and covered the upper floors of the gurdwara with gold, which gives it its distinctive appearance and its English name. The Harimandir Sahib is considered holy by Sikhs. </div>
  <a href="2.history.php"><button type="button" name="button" class="btn"  >Know More...</button></a>  </center>
    </div>
  </div>

  <?php include 'includes/2-footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="assets/js/custom-script.js"></script>
</body>
</html>
