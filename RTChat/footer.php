<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
   
   <style type="text/css">
      .footer{
         background: url(footer-bg.jpg) no-repeat;
         background-size: cover;
         background-position: center;
         position: relative;
         width: 100%;
         bottom: 0;
         left: 0;
      }

      .footer .box-container{
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));

      }

      .footer .box-container .box h3{
         color:white;
         /*font-size: 2.5rem;*/
         padding-bottom: 2rem;
      }

      .footer .box-container .box a{
         color:white;
         /*font-size: 1.5rem;*/
         /*padding-bottom: 1.5rem;*/
         display: block;
      }

      .footer .box-container .box a i{
         color:violet;
         padding-right: .5rem;
         transition: .2s linear;
      }

      .footer .box-container .box a:hover i{
         padding-right: 2rem;
      }

      .footer .credit{
         text-align: center;
         padding-top: 3rem;
         margin-top: 3rem;
         border-top: .1rem solid white;
         font-size: 2rem;
         color:var(--white);
      }
      .footer .credit span{
         color:violet;
      }

   </style>
</head>
<body>
<!-- footer starts -->
<section class="footer">

   <div class="box-container container-fluid" style="width:100%">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

</body>
</html>