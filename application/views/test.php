<form action="<?php echo base_url(); ?>User/save_signup_data" method="post">
  <!-- <div class="form-group">

    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div> -->
  <div class="form-group">
      
    <label for="email">First name</label>
    <input type="text" class="form-control" id="first_name" name="first_name">
  </div>
  <div class="form-group">
      
    <label for="email"></label>
    <input type="text" class="form-control" id="last_name" name="last_name">
  </div>
  <!-- <div class="form-group">
      
    <label for="email"></label>
    <input type="text" class="form-control" id="phone" name="">
  </div>

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div> -->
  <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div> -->
  <button type="submit" class="btn btn-default">Submit</button>
</form>