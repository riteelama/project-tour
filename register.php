<?php
require 'config/config.php';
require 'includes/form_handlers/register_handlers.php';
require 'includes/form_handlers/login_handler.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form action="register.php" method="post">
        <div class="col-sm-6 offset-sm-3">
            <label for="First Name" class="form-label required">First Name</label>
            <input type="text" name="fname" placeholder="First Name or Company First Name" class="form-control" required>
            <br>
            <?php if(in_array("Your first name should be between 2 and 50 character<br/>",$error_array)) echo "Your first name should be between 2 and 50 character<br/>"?>

            <label for="Last Name" class="form-label required">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name or Company Last Name" class="form-control" required>
            <br>
            <?php if(in_array("Your last name should be between 2 and 50 character<br/>",$error_array)) echo "Your last name should be between 2 and 50 character<br/>"?>

            <label for="Address" class="form-label required">Address</label>
            <input type="text" name="address" placeholder="Address" class="form-control" required>
            <br>

            <label for="Phone Number" class="form-label required">Phone Number</label>
            <input type="text" name="phone_number" placeholder="Phone Number" class="form-control" required>
            <br>

            <label for="Email" class="form-label required">Email</label>
            <input type="email" name="email" placeholder="email" class="form-control" required>
            <br>

            <label for="Email2" class="form-label required">Confirm Email</label>
            <input type="email" name="email2" placeholder="confirm email" class="form-control" required>
            <br>
            <?php if(in_array("Email already exists<br/>",$error_array)) echo "Email already exists<br/>";
            else if(in_array("Invalid Format<br/>",$error_array)) echo "Invalid Format<br/>";
            else if(in_array("Emails doesn't match<br/>",$error_array)) echo "Emails doesn't match<br/>"?>
            
            <label for="Password" class="form-label required">Password</label>
            <input type="password" name="password" placeholder="password" required class="form-control">
            <br>

            <label for="Re-password" class="form-label required">Re-Type Password</label>
            <input type="password" name="password2" placeholder="confirm password" required class="form-control">
            <br>
            <?php if(in_array("Your password doesnot match<br/>",$error_array)) echo "Your password doesnot match<br/>";
            else if(in_array("Your password can only contain english characters or numbers<br/>",$error_array)) echo "Your password can only contain english characters or numbers<br/>";
            else if(in_array("Your password must be between 5 and 30<br/>",$error_array)) echo "Your password must be between 5 and 30<br/>"?>

            <button type="submit" name="register-button" class="btn btn-primary">Register Now </button>
            <br>
            <?php if(in_array("<span style='color:#14c800;'> You're all set! Go ahead and login!</span><br>",$error_array)) echo "<span style='color:#14c800;'> You're all set! Go ahead and login!</span><br>"?>
        </div>
    </form>        
</body>
</html>