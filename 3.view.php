<!DOCTYPE html>
<html lang="en">
  <head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    		 <link href="assets/css/main.css" rel="stylesheet">
		<title>History</title>
    <style media="screen">
.showflex {
  display: flex;
  padding-top: 60px;
  padding-bottom: 60px; }
.left-sewadaar {
  width: 20%; }
.right-sewadaar {
  width: 20%; }
@media screen and (max-width: 600px) {
  .lefft-sewadaar {
    display: none; }
  .righht-sewadaar {
    display: none; }
  .maincontent {
    width: 100% !important;
    height: 475px; } }
    .sewadar2 {
      height: 600px;
      width: 100%; }
          .slideInRight {
            animation-name: slideInRight;
            animation-duration: 2s;
            animation-fill-mode: both;
          }
          .slideInLeft {
            animation-name: slideInLeft;
            animation-duration: 2s;
            animation-fill-mode: both;
          }
          @keyframes slideInRight {
            from {
              transform: translate3d(100%, 0, 0);
              visibility: visible;
            }
            to {
              transform: translate3d(0, 0, 0);
            }
          }
          @keyframes slideInLeft {
            from {
              transform: translate3d(-100%, 0, 0);
              visibility: visible;
            }
            to {
              transform: translate3d(0, 0, 0);
            }
          }
          .maincontent {
            position: relative;
            width: 60%; }
            .maindata {
              position: absolute;
              top: 0;
              width: 84%;
              height: 74%;
              overflow: auto;
              margin-top: 50px;
              padding: 20px;
              margin-left: 7%; }
              .art {
                width: 100%;
                height: 100%; }
        .translate{
          text-decoration: underline;
          color: red;
        }
          .translate:hover{
            cursor: pointer;
          }
        </style>
        <body bgcolor="#f0f0f0">
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
      <?php
      require "includes/arrays.php" ;
         if (isset($_GET['item'])) {
            $boxheading=$_GET['item'];
            $box11=$history[$boxheading];   }?>
            <div class="showflex">
            <div class="lefft-sewadaar">
                <img src="assets/images/icons/<?php echo $box11['lr'] ?>.png" alt="sukhjinder singh " class='sewadar2 slideInLeft'>
          	</div>
            <div class="maincontent">
            <img src="assets/images/icons/3.png" alt="sukhsingh.in" class="art " >
             <center> <div class="maindata" id="maindata" style="font-family:'Righteous', cursive;">
              <div class="data">
                <?php echo $box11['eng']; ?>
              </div>
               <p class="translate">-Translate into punjabi-</p>
          <a href="2.history.php" class="link" >*Back To Articles*</a></button>
              </div>
            </div>
            <div class="righht-sewadaar">
                <img src="assets/images/icons/<?php echo $box11['lr']+1; ?>.png" alt="sukhjinder"class='sewadar2 slideInRight'>
            </div>
          </div>
        </body>
        <?php include 'includes/2-footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
          var translation =  "  <?php echo $box11['pun']; ?>";
        $('.loader').fadeOut(1200);
            $(".menubtn").click(function() {
              $(".block-menu li").toggle(500,"linear");
            });
            $(".translate").click(function(){
              $(".data").html(translation);
              $(".translate").hide();
            })
      });
        </script>
      </body>
      </html>
