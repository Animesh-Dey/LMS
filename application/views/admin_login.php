<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="<?php echo base_url(); ?>assets/User/images/Black and Beige Simple & Circular Teaching Hospital Logo.png"
    />
    <!-- <link rel="icon" href="./images/Black and Beige Simple & Circular Teaching Hospital Logo.png"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/Admin/css/admin-login.css" />
    <title>LMS || Admin </title>
  </head>
  <body>
    <!--MAIN-->
    <div class="bubbles">
      <main class="main-container">
        <section class="container" data-aos="fade-up">
          <div class="heading" >
             <h1 data-aos="fade-up">ADMIN</h1>
           </div>
           <!--login section-->
           <div class="input-container">
             <div class="row">
               <form class="col s12" method="post" action="admin_login_check">
                 <div class="row">
                   <div class="input-field col s12">
                     <input id="email" type="text" name="username" class="validate">
                     <label for="email">Email</label>
                   </div>
                   <div class="input-field col s12">
                     <input id="password" type="password" name="password" class="validate">
                     <label for="password">Password</label>
                   </div>
                   <label>
                     <input type="checkbox" id="togglePassword"/>
                     <span>Show Password</span>
                   </label>
                 </div>
                 <!--Button Container-->
                  <div class="button"><button class="btn waves-effect waves-light" type="submit" name="action">login</button></div>
                   <!-- <div class="para-container"><a href="login">Have user account?</a></div>  -->
               </form>
             </div> 
           </div>   
         </section>
       </main>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
    </div>    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/Admin/js/admin-login.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
    offset:400,
    duration:2000
  });
    </script>
  </body>
</html>