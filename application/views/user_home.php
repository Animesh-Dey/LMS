<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/User/css/home.css" />
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="icon"
      href="<?php echo base_url(); ?>assets/User/images/Black and Beige Simple & Circular Teaching Hospital Logo.png"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
   <title>Library Management Systemem</title>
 </head>
 <body>
    <div class="main-container">
   <nav class="navbar">
     <!-- LOGO -->
     <div class="logo"> <a href="./home.html"><b> Library Management System </b></a> </div>
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         
         <li class="services">
           <a href="#">Hi,user_name  <i class="fas fa-user"></i></a>
           <!-- DROPDOWN MENU -->
           <ul class="dropdown">
             <li><a href="user_logout">Log out <i class="fas fa-sign-out-alt"></i></a></li>
           </ul>
         </li>
         
       </div>
     </ul>
   </nav>
   <div class="container">
    <!-- Working area mine -->
   <a href="user_entry" class="content-box"><div>New Entry</div></a>
   <a href="user_submission" class="content-box"><div>Submission</div></a>
</div>
</div>
<script src="<?php echo base_url(); ?>assets/User/js/home.js"></script>
</body>
</html>