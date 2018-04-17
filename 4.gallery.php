<!DOCTYPE html>
<html lang="en">
  <head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				 <link href="assets/css/main.css" rel="stylesheet">
         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.css">
		<title>Gallery</title>
    <style media="screen">

.gall {
  background-color: #f0f0f0;
  padding: 15px;
  padding-top: 60px; }
  .gall img {
    opacity: .9;
    transform: scale(0.9); }

.gall-img {
  width: 300px;
  height: 200px;
  margin: 10px;
  border: solid 5px darkgoldenrod;
  transition: all 0.5s ease-in-out; }
  .gall-img:hover {
    opacity: 1;
    transform: rotate(2deg) scale(1);
    box-shadow: 0 0 7px rgba(0, 0, 0, 0.7); }

@media screen and (max-width: 835px) {
  .gall-img {
    width: 100% !important;
    height: 100%; } }

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
  <div class="gall">
    <center><h1 style="color:goldenrod;margin-bottom:30px">Image Galley</h1></center>
    <div class="row">
      <?php for ($i=1; $i <16 ; $i++) { ?>
        <div class="col-sm-4 gfc">
          <a href="assets/images/gallery/<?php echo $i; ?>.jpg" data-lightbox="Photova"><img src="assets/images/thumbnails/<?php echo $i; ?>.jpg" alt="sukhjinder singh webdeveloper" class="gall-img"></a>
        </div>
     <?php  } ?>
    </div>
  </div>
  <?php include 'includes/2-footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$('.loader').fadeOut(1200);
/*Menu show */
    $(".menubtn").click(function() {
      $(".block-menu li").toggle(500,"linear");
    });
});
</script>
</body>
</html>
