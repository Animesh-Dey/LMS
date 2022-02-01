<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="icon"
      href="<?php echo base_url(); ?>assets/User/images/Black and Beige Simple & Circular Teaching Hospital Logo.png"
    />

    <link
      rel="stylesheet"
      href="https://unpkg.com/flickity@2/dist/flickity.min.css"
    />
    <!-- Compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- Include the Material Ui theme -->
    <link
      href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/User/css/subMission.css" />
    <title>Library Management System</title>
  </head>
  <body>
    <!--Main-->
    <main>
      <!--header-->
      
      <nav class="navbar">
        <!-- LOGO -->
        <div class="logo"><a href="./home.html"><b>Library Management System</b> 
          </a></div>
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
          <!-- USING CHECKBOX HACK -->
          <!-- <input type="checkbox" id="checkbox_toggle" />
          <label for="checkbox_toggle" class="hamburger">&#9776;</label> -->
          
          
        </ul>
      </nav>
      <!--form-->
      <section class="form-container">
        <!-- <div class="form-heading"><h2>Kali Puja</h2></div> -->
        <div class="form-heading"><h2>Book Submission</h2></div>
        <div class="row">
          <form class="col s12" method="post" action="user_submission_save">
            <div class="row">
              <div class="input-field col s6">
                <input id="first_name2" class="name" name="student_name" type="text" required />
                <label class="active" for="first_name2"
                  >Student Name <span class="astrick">*</span></label
                >
              </div>
              <div class="input-field col s6">
                <input id="first_name2" class="studentId" name="student_id" type="text" required />
                <label class="active" for="first_name2"
                  >Student Id <span class="astrick">*</span></label
                >
              </div>
              <div class="input-field col s6">
                <input id="first_name2" class="Dept" name="dept" type="text" required />
                <label class="active" for="first_name2"
                  >Dept. <span class="astrick">*</span></label
                >
              </div>
              <div class="input-field col s6">
                <input
                  id="first_name2"
                  class="makautRoll"
                  type="text"
                  name="makaut_roll"
                  required
                />
                <label class="active" for="first_name2"
                  >Makaut Roll. <span class="astrick">*</span></label
                >
              </div>
              <div class="input-field col s6">
                <input
                  id="first_name2"
                  class="bookId"
                  type="text"
                  name="book_id"
                  required
                />
                <label class="active" for="first_name2"
                  >Book Ids <span class="astrick">*</span></label
                >
              </div>
              <!-- Testing -->
              <div class="input-field col s6">
                <input
                  id="first_name2"
                  class="bookId"
                  type="date"
                  name="submit_date"
                  required
                />
                <label class="active" for="first_name2"
                  >Submit Date <span class="astrick">*</span></label
                >
              </div>
              <!-- Testing -->
              <div class="input-field col s6">
                <input
                  id="first_name2"
                  class="fine"
                  type="text"

                  name="fine"
                  title="If there is no fine then enter 0"
                  required
                />
                <label class="active" for="first_name2"
                  >Fine</label
                >
              </div>
            </div>
            <!--Button Container-->
            <div class="button-container">
              <button
                class="btn waves-effect waves-light submit-button"
                type="submit"
                name="action"
              >
                Submit
              </button>
            </div>
          </form>
        </div>
      </section>
    </main>

    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
    <!--Script-->
   
  </body>
</html>
