<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Home</title>
   <!--font awesome cdn link-->
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!--swiper cdn link-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
   <!--css file link-->
   <link rel="stylesheet" type="text/css" href="style.css">
   <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
    :root
    {
   --main-color: #8e44ad;
   --black: #222;
   --white: #fff;
   --light-black: #777;
   --light-white: #fff9;
   --dark-bg: rgba(0,0,0,.7);
   --light-bg: #eee;
   --border: .1rem solid var(--black);
   --box-shadow: 0.5rem 1rem rgba(0,0,0,.1);
   --text-shadow: 0 1.5rem 3rem rgba(0,0,0,.3);
   }
   *
   {
   font-family: 'poppins',sans-serif;
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   outline: none;
   border: none;
   text-decoration: none;
   text-transform: capitalize;
   }
   html
   {
      font-size: 62.5%;
      overflow-x: hidden;
   }
   html::-webkit-scrollbar
   {
      width: 1rem;
   }
   html::-webkit-scrollbar-track
   {
      background-color: var(--white);
   }
   html::-webkit-scrollbar-thumb
   {
      background-color: var(--main-color);
   }
   section
   {
      padding: 5rem 10%;
   }
   .header
   {
      position: sticky;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background-color: var(--white);
      display: flex;
      padding-top: 2rem;
      padding-bottom: 2rem;
      box-shadow: var(--box-shadow);
      align-items: center;
      justify-content: space-between;
   }
   .header .logo
   {
      font-size: 2.5rem;
      color: var(--black);
   }
   .header .navbar a
   {
      font-size: 2rem;
      margin-left: 2rem;
      color: var(--black);
   }
   .header .navbar a:hover
   {
      color:var(--main-color);
   }
   #menu-btn
   {
      font-size: 2.5rem;
      cursor: pointer;
      color: var(--black);
   }









   @media(max-width: 1200px)
   {
      section
      {
         padding: 3rem 5%;
      }
   }
   @media(max-width: 991px)
   {
      html
      {
         font-size: 55%;
      }
      section
      {
         padding: 3rem 2rem;
      }
   }
   @media(max-width: 768px)
   {
      #menu-btn
      {
         display:inline-block;
         transition: .2s linear;
      }
      #menu-btn.fa-times
      {
         transform: rotate(180deg);
      }
      .header .navbar
      {
         position: absolute;
         top:99%; left:0; right:0;
         background-color: var(--white);
         border-top: var(--border);
         padding:2rem;
         transition: .2s linear;
         clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
       }

   .header .navbar.active
   {
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }
      .header .navbar a
      {
         display:block;
         margin: 2rem;
         text-align: center;
      }
   }
   @media(max-width:450px)
      {
         html
         {
            font-size: 50%;
         }
      }


   </style>
</head>
<body>
   <section class="header">
         <a href="home.php" class="logo">SmartChat<img src="logout"></a>
         <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About_SmartChat</a>
            <a href="team.php">Team</a>
            <a href="contact.php">Contact</a>
            <a href="signup.php">Signup</a>
            <a href="login.php">Login</a>
         </nav>
         <div id="menu-btn" class="fas fa-bars"></div>
   </section>
</section>

<script type="text/javascript">
   let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

window.onscroll = () =>{
   menu.classList.remove('fa-times');
   navbar.classList.remove('active');
};

</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>