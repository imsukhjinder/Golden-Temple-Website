<!DOCTYPE html>
<html lang="en">
  <head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    		 <link href="assets/css/main.css" rel="stylesheet">
		<title>History</title>
    <style media="screen">
    .link {
      font-weight: bold; }
.thumb2 {
  width: 100%;
  height: auto;
  margin-bottom: 10px; }
.vbox {
  background-color: white;
  padding: 10px;
  margin: 15px;
  border: solid 2px darkgoldenrod;
  margin-right: 15px !important;
  margin-left: 15px !important; }

.historypage {
  padding: 15px;
  padding-top: 70px; }

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
      <div class="historypage">
  <?php include'includes/arrays.php';
    foreach ($history as $box => $item) {
     ?>
     <div class="row vbox" >
       <div class="col-sm-4">
        <img src="assets/images/thumbnails/<?php echo $item['Img'];  ?>" alt="sukhjinder singh vicky" class='thumb2'>
       </div>
       <div class="col-sm-8" style=" font-family: 'Noto Sans', sans-serif;">
         <h3> <?php echo $box; ?></h3>
         <?php echo $item['Content']; ?><br>
				 <a href="3.view.php?item=<?php echo $box; ?>" class="link">Read More...</a>
       </div>
     </div>
  <?php    }  ?>
</div>
  </body>
  <?php include 'includes/2-footer.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  $('.loader').fadeOut(1200);
      $(".menubtn").click(function() {
        $(".block-menu li").toggle(500,"linear");
      });
});
  </script>
</body>
</html>
