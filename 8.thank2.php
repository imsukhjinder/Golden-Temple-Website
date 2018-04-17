<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request Handling</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  </head>
<style media="screen">
  body{
    margin: 0px;
  }
      .hero {
      background-color: #00c171ed;
      position: relative;
      height: 100vh;
      overflow: hidden;
      font-family: 'Montserrat', sans-serif;
      }

      .hero__title {
        text-align: center;
      color: #fff;
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
              transform: translate(-50%, -50%);
      font-size: 50px;
      z-index: 1;
      }

      .cube {
      position: absolute;
      top: 80vh;
      left: 45vw;
      width: 10px;
      height: 10px;
      border: solid 1px #003298;
      -webkit-transform-origin: top left;
              transform-origin: top left;
      -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
              transform: scale(0) rotate(0deg) translate(-50%, -50%);
      -webkit-animation: cube 2s ease-in forwards infinite;
              animation: cube 2s ease-in forwards infinite  ;
      }
      .cube:nth-child(2n) {
      border-color: #0051f4;
      }
      .cube:nth-child(2) {
      -webkit-animation-delay: 2s;
              animation-delay: 2s;
      left: 25vw;
      top: 40vh;
      }
      .cube:nth-child(3) {
      -webkit-animation-delay: 4s;
              animation-delay: 4s;
      left: 75vw;
      top: 50vh;
      }
      .cube:nth-child(4) {
      -webkit-animation-delay: 6s;
              animation-delay: 6s;
      left: 90vw;
      top: 10vh;
      }
      .cube:nth-child(5) {
      -webkit-animation-delay: 8s;
              animation-delay: 8s;
      left: 10vw;
      top: 85vh;
      }
      .cube:nth-child(6) {
      -webkit-animation-delay: 10s;
              animation-delay: 10s;
      left: 50vw;
      top: 10vh;
      }

      @-webkit-keyframes cube {
      from {
        -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 1;
      }
      to {
        -webkit-transform: scale(20) rotate(960deg) translate(-50%, -50%);
                transform: scale(20) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
      }}

      @keyframes cube {
      from {
        -webkit-transform: scale(0) rotate(0deg) translate(-50%, -50%);
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
        opacity: 1;
      }
      to {
        -webkit-transform: scale(20) rotate(960deg) translate(-50%, -50%);
                transform: scale(20) rotate(960deg) translate(-50%, -50%);
        opacity: 0;
      }}
      button
      {
        background-color: #125238f7;
        min-width: 150px;
        min-height: 40px;
        padding: 10px;
        border-radius: 10px;
        color:white;
        border: 2px solid white;
        font-size: 20px;
        box-shadow: 0 26px 12px -10px black;
        transition: 0.3s ease-in-out;
      }
      button:hover
      {
        background-color: white;
        border: 2px solid #125238f7;
        color: #125238f7;
        cursor: pointer;
        box-shadow: 0 26px 12px -20px black;
      }
  </style>
  <body>
    <div class="hero">
    <div class="hero__title" id="er"><div class="animated bounceInUp" style="animation-delay:1s;"> THANK YOU</div><div class="animated bounceInDown" style="animation-delay:2s;"><?php echo strtoupper($_SESSION['name'])."!"; ?></div><div class=" animated bounceInLeft" style="animation-delay:1s;">FOR CONTACTING</divt>
      <div class="animated flipInX" style="animation-delay:3s;font-size:30px;">
        <a href="index.php"> <button type="button" name="button">Go Back</button> </a>
      </div>
      </div>
    </div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>

 </div>
</body>
</html>
