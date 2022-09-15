<?php
  include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>About Page</title>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Anonymous+Pro);
    /* Global */
    .line-1{
        position: relative;
        top: 50%;  
        width: 24em;
        margin: 0 auto;
        border-right: 2px solid rgba(255,255,255,.75);
        font-size: 180%;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        transform: translateY(-50%);    
    }

    /* Animation */
    .anim-typewriter{
      animation: typewriter 4s steps(44) 1s 1 normal both,
                 blinkTextCursor 500ms steps(44) infinite normal;
    }
    @keyframes typewriter{
      from{width: 0;}
      to{width: 24em;}
    }
    @keyframes blinkTextCursor{
      from{border-right-color: rgba(255,255,255,.75);}
      to{border-right-color: transparent;}
    }
  </style>
</head>
<body>
  <div style="background-color:; width: 100%; height: 50%;margin-top: 5%;color:black;padding: 5%;">
    <h1 class="line-1 anim-typewriter" style="font-size: 3rem;">Welcome to SmartChat<img src="logo.png" width="50px" height="50px"></h1>
      <p style="font-family:Lucida Calligraphy; margin-left: 40%; color: gray; font-size:2rem;">SmartChat</p>
      <p style="margin-left: 30%; color:gray;">Now send and recieve messages without keeping your phone online...<br>
      SmartChat is a website helpful for students to share their knowledge<br>
      <br>
      <p style="border-bottom:1px solid #ccc; margin-left:20%; margin-right: 20%;"></p>
      </p>
      <p style="margin-left: 35%; color:gray; font-weight: bold;">Copyrights  &copy; SmartChat by JhanSi<br></p>
      <p style="margin-left: 35%; color:gray;">Contact us through <i class="bi bi-envelope"></i> jhansipyla@gmail.com</p>
      <p style="margin-left: 40%; color:gray;padding-bottom: 5%;">Mobile: <i class="bi bi-telephone-fill" style="color:red;"></i></i> 9381976848</p>
  </div>
</body>
</html>