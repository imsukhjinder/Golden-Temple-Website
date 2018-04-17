<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Processing</title>
  </head>
  <style media="screen">
  /* Reset */
  @import url(//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700);
  * {
  margin: 0;
  padding: 0;
  font-size: inherit;
  color: inherit;
  box-sizing: inherit;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-font-smoothing: antialiased;
  }
  html {
  box-sizing: border-box;
  }

  body {
  background-size: cover;
  min-width: 300px;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  }

  a {
  text-decoration: none;
  }

  a:hover {
  text-decoration: underline;
  }
  .bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
  }

  .bg2 {
    animation-direction:alternate-reverse;
    animation-duration:4s;
  }

  .bg3 {
    animation-duration:5s;
  }
  @keyframes slide {
    0% {
      transform:translateX(-25%);
    }
    100% {
      transform:translateX(25%);
    }
  }
  .Processing-text{
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
    height: 100vh;
    font-size: 3rem;
    margin-left: 20px;
  }
  .error{
    color:white;
    position:  absolute;
    top: 12px;
    left: 12px;
    font-size: 2em;
  }
  </style>
  <body >

    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
      <div class="Processing-text"><h1 >Processing Request...<h1></div>
      <?php
        function has_header_injection($str)
       {  return preg_match("/[\r\n]/", $str);  }

        $valid = "true";
        if (isset($_POST['contact_submit'])) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $phone = $_POST['phone'];
            $msg = $_POST['message'];
          $errormsg = "  ";
            /* Validations Start */
            if(has_header_injection($name) || has_header_injection($email) || has_header_injection($phone) || has_header_injection($msg))
              { die();}
            if(!$name || !$email || !$phone || !$msg )
                  {
                    $valid = "false";
                    $errormsg = "Please fill all fields";
                  }
                  elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                      $valid = "false";
                      $errormsg = "Name can have only Alphabets and space ";
                  }
                  elseif (!preg_match("/^[0-9]/",$phone)) {
                      $valid = "false";
                      $errormsg = "Phone no. is not valid";
                  }
                  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $valid = "false";
                      $errormsg = "Invalid Email Format";
                  }
                  elseif (preg_match("/<script>/i",$msg)||preg_match("/<\?php/i",$msg)) {
                      $valid = "false";
                      $errormsg = "Writing code is prohibited ";
                  }
                  echo "<h1 class='error' >$errormsg </h1><br>";
            /* Validations End */
        if ($valid == "true") {
                // Add the recipient email to a variable
                 $to	= "sukhjindersinghmca@gmail.com";
                 // Create a subject
                 $subject = "$name sent a message via Golden Temple Amritsar Website";
                 // Construct the message
                 $message = "Name: $name\r\n";
                 $message .= "Email: $email\r\n\r\n";
                 $message .= "Contact: $phone\r\n";
                 $message .= "Message:\r\n$msg";
                 $message = wordwrap($message, 72); // Keep the message neat n' tidy
                 // Send the email!
                 mail($to, $subject, $message, 'From: GoldenTempleAmritsar@sukhsingh.in');
                   $_SESSION['name']=$name;
              echo '<script>window.location="8.thank2.php"</script>';
            }
        }
     ?>
    </div>
  </body>
</html>
