<?php
  include("config.php");
 ?>
<!DOCTYPE html>
  <head>
    <title>Sign-Up</title>
    <?php
      include("head.php");
     ?>
  </head>
  <body>
    <?php
      include("menu.php");
     ?>

     <br>
     <br>
 <div class="container">
 <div class="jumbotron">
    <form action="/examples/actions/confirmation.php" method="post">
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			    <label>Login</label>
        	<input type="text" class="form-control" name="username" required="required" >
        </div>
        <div class="form-group">
			    <label>Email Address</label>
        	<input type="email" class="form-control" name="email"  required="required">
        </div>

         <div class="form-group">
              <label style="margin-right:20px;">Gender</label>
              <label class="radio-inline">
                <input name="gender" id="input-gender-male" value="Male" type="radio" required="required">Male
              </label>
              <label class="radio-inline">
                <input name="gender" id="input-gender-female" value="Female" type="radio" />Female
              </label>
          </div>


        <div class="form-group">
			    <label>First Name</label>
        	<input type="text" class="form-control" name="first_name"  required="required">
        </div>

        <div class="form-group">
			    <label>Last Name</label>
        	<input type="text" class="form-control" name="last_name"  required="required">
        </div>

        <div class="form-group">
			    <label>Phone Number</label>
        	<input type="text" class="form-control" name="phonenumber"  required="required">
        </div>

		    <div class="form-group">
			     <label>Password</label>
           <input type="password" class="form-control" name="password" required="required">
        </div>
	    	<div class="form-group">
			      <label>Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" required="required">
        </div>
        <div class="form-group">
			      <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
	    	</div>
	    	<div class="form-group">
            <button type="submit" name="submit" value="Login" class="btn btn-primary">Sign Up</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="./login.php">Login here</a></div>
</div>
</div>
      <br><br>
      <?php
        include("footer.php");
        include("jscript.php");
       ?>

  </body>
</html>
