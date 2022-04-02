<?php
if(isset($_POST['login_button'])){

    $log_email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //sanitize email
 
    $_SESSION['log_email'] = $log_email;  //Store email into session variable

    $log_password = md5($_POST['log_password']); //Get Password

    $check_database_query = mysqli_query($con, "SELECT * FROM users WHERE user_email = '$log_email' AND user_password = '$log_password'");

    $check_login_query = mysqli_num_rows($check_database_query);

    if($check_login_query == 1){
        $row = mysqli_fetch_array($check_database_query);
        $username = $row['user_name'];

        // //Reopen closed account
        // $user_closed_query = mysqli_query($con, "SELECT * FROM users WHERE user_email = '$log_email' AND user_status = 0");
        // if(mysqli_num_rows($user_closed_query) == 1){
        //     $reopen_account = mysqli_query($con, "UPDATE users SET user_status='1' WHERE user_email = '$log_email'");
        // }

       // var_dump($username);

        $_SESSION['email'] = $log_email;
        header("Location:admin/index.php");
        exit();

    }
    else {
        array_push($error_array, "Email or password was incorrect<br>");
    }
}

?>