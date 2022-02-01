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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Include the Material Ui theme -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/User/css/signup.css" />
    <title>Library Management System</title>
  </head>
  <body>
    <div class="hero">
      <!-- <div class="hero__title">Hello World</div> -->
      <main class="main-container">
        <section class="container" data-aos="fade-up">
          <div class="heading">
            <h1 data-aos="fade-up">SIGN UP</h1>
          </div>
          <!--login section-->
          <div class="input-container">
            <div class="row">
              <!-- <form class="col s12" method="post" action="<?php echo base_url(); ?>User/save_signup_data"> -->
              <form class="col s12" method="post" action="save_signup">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="first_name" name="first_name" type="text" class="validate firstname" required/>
                    <label for="first_name">First Name</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="last_name" name="last_name" type="text" class="validate lastname"  required/>
                    <label for="last_name">Last Name</label>
                  </div>
                  <!--Ph Number-->
                  <div class="input-field col s12">
                    <input
                      id="Phone_no"
                      name="phone"
                      type="text"
                      class="validate"
                       required
                    />
                    <label for="Phone_no">Phone Number</label>
                  </div>
                  <div class="input-field col s12">
                    <input
                      id="employee_id"
                      name="employee_id"
                      type="text"
                      class="validate"
                       required
                    />
                    <label for="employee_id">Employee Id</label>
                  </div>
                  <!--Email-->
                  <div class="input-field col s12">
                    <input id="email" type="email" name="email" class="validate"  required/>
                    <label for="email">Email</label>
                  </div>
                  <!--Password-->
                  <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate" required />
                    <label for="password">Create Password1</label>
                  </div>
                  <label>
                    <input type="checkbox" id="togglePassword" />
                    <span>Show Password</span>
                  </label>
                  <!--Button Container-->
                  <br><br>
                  <div class="button">
                    <button
                      class="btn waves-effect waves-light"
                      type="submit"
                      name="action"
                    >
                      Signup
                    </button>
                  </div>
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                  <div class="para-container">
                    <a href="login">Have a account?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </section>
      </main>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/User/js/signup.js"></script> -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
      AOS.init({
        offset: 400,
        duration: 2000,
      });
    </script>
  </body>
</html>