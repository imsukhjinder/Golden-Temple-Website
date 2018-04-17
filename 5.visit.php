<!DOCTYPE html>
<html lang="en">
  <head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
				 <link href="assets/css/main.css" rel="stylesheet">
		<title>Views</title>
    <style media="screen">
    iframe{
	margin:20px;
	width:90%;
	border:solid 2px goldenrod;

}
.visit{
	padding-top:60px;
	margin-bottom:30px;
}
h3{
font-family: 'Bellefair', serif;
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
  <div class="visit">
  <center>
<h3 >Inside view of Shree Darbaar Sahib </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1500796612056!6m8!1m7!1s-W8ILPDjDpkAAAQWtFSWXg!2m2!1d31.6204403534814!2d74.87599757483122!3f122!4f0!5f0.8160813932612223"  height="450" frameborder="0"  allowfullscreen></iframe>

<h3>Outside view of Shree Darbaar Sahib </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m0!4v1500796955219!6m8!1m7!1sF%3A-ASUcB2Wj_hI%2FV2FCVttijYI%2FAAAAAAAAFQM%2FZKDX8tHr_O01Rpg0pdNG8MqaGHDMI8oVwCJkC!2m2!1d31.61998029999999!2d74.8764849!3f320.60898087245016!4f4.141381098533131!5f0.7820865974627469"  height="450" frameborder="0" allowfullscreen></iframe>

<h3>Direction to Shree Darbaar Sahib </h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13590.02591167995!2d74.8764849!3d31.61998029999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x604384897626248e!2sHarmandir+Sahib!5e0!3m2!1sen!2sin!4v1500797191316" height="450" frameborder="0" allowfullscreen></iframe>
</center>
</div>

  <?php include 'includes/2-footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
