<?php
//Declaring variable to prevent errors
$fname = ""; //first name

$lname = ""; //last name
$address = ""; //address
$phone_number = ""; //phone number
$email = ""; //email
$email2 = ""; //email2
$password = ""; //password
$password2 = ""; //password2
$error_array = array(); //Holds error messages

if(isset($_POST["register-button"])){

    //Registration form values

    //First Name
    $fname = strip_tags($_POST['fname']); //Removes html tags
    $fname = str_replace(' ','',$fname); //removes spaces
    $fname = ucfirst(strtolower($fname)); //Uppercase first letter
    $_SESSION['fname'] = $fname; //stores first name into session

    //Last Name
    $lname = strip_tags($_POST['lname']); //Removes html tags
    $lname = str_replace(' ','',$lname); //removes spaces
    $lname = ucfirst(strtolower($lname)); //Uppercase first letter
    $_SESSION['lname'] = $lname; //stores last name into session

    //Address
    $address = strip_tags($_POST['address']); //Removes html tags
    $address = str_replace(' ','',$address); //removes spaces
    $address = ucfirst(strtolower($address)); //Uppercase first letter
    $_SESSION['address'] = $address; //stores address into session

    //Phone Number
    $phone_number = strip_tags($_POST['phone_number']); //Removes html tags
    $phone_number = str_replace(' ','',$phone_number); //removes spaces
    $phone_number = ucfirst(strtolower($phone_number)); //Uppercase first letter
    $_SESSION['phone_number'] = $phone_number; //stores phone number into session

    //Email
    $email = strip_tags($_POST['email']); //Removes html tags
    $email = str_replace(' ','',$email); //removes spaces
    $_SESSION['fname'] = $fname; //stores first name into session
    $_SESSION['email'] = $email; //stores email into session
    

    //Confirm Email
    $email2 = strip_tags($_POST['email2']); //Removes html tags
    $email2 = str_replace(' ','',$email2); //removes spaces
    $_SESSION['email2'] = $email2; //stores email2 into session
    

    //Password
    $password = strip_tags($_POST['password']); //Removes html tags
    
    //Confirm Password
    $password2 = strip_tags($_POST['password2']); //Removes html tags
    
    if($email == $email2){
      //Checks if email is in valid format

      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email = filter_var($email,FILTER_VALIDATE_EMAIL);

        // Check if email exists

       $e_check = mysqli_query($con, "SELECT user_email from users Where user_email = '$email'");

       //Count the number of rows returned
       $num_rows = mysqli_num_rows($e_check);

       if($num_rows > 0){
           array_push($error_array,"Email already exists<br/>");
       }

      }
      else {
        array_push($error_array,"Invalid Format<br/>");
      }
    }
    else {
        array_push($error_array,"Emails doesn't match<br/>");
    }

    if(strlen($fname) > 50 || strlen($fname) < 2 ){
        array_push($error_array,"Your first name should be between 2 and 50 character<br/>");
    }

    if(strlen($lname) > 50 || strlen($lname) < 2 ){
        array_push($error_array,"Your last name should be between 2 and 50 character<br/>");
    }

    if($password != $password2){
        array_push($error_array,"Your password doesnot match<br/>");
    }
    else { 
        if(preg_match('/[^A-Za-z0-9]/', $password)){
            array_push($error_array,"Your password can only contain english characters or numbers<br/>");
        }
    }

    if(strlen($password)>30 || strlen($password) < 5){
        array_push($error_array,"Your password must be between 5 and 30<br/>");
    }
    
    if(empty($error_array)){
        $password = md5($password); //Encrypts password before sending to database

        //Generate username by concatenationg firstname and last name
        $username = strtolower($fname . "_" . $lname);
        $check_username_query = mysqli_query($con,"SELECT user_name from users WHERE user_name = '$username'");

        $i = 0;
        //if username exists add number to username
        while(mysqli_num_rows($check_username_query) != 0){
            $i++; //Add i to i
            $username = $username . "_" . $i;
            $check_username_query = mysqli_query($con,"SELECT user_name from users WHERE user_name = '$username'");
        }

            $query = mysqli_query($con, "INSERT INTO users VALUES ('', '$fname', '$lname', '$username', '$address','$phone_number','$email','$password') ");

            array_push($error_array, "<span style='color:#14c800;'> You're all set! Go ahead and login!</span><br>");

            //Clear session variables
            $_SESSION['fname'] = "";
            $_SESSION['lname'] = "";
            $_SESSION['address'] = "";
            $_SESSION['phone_number'] = "";
            $_SESSION['email'] = "";
            $_SESSION['email2'] = "";
         }
    }


?>