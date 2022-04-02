<?php

    include "../config/config.php";
    
    $email = $_SESSION['email'];
     // var_dump($email);
     if( empty($email)){
        header('location: ../login.php');
     }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top">
<?php
    $select_user_role = mysqli_query($con, "SELECT users.user_id, users.user_email, users.user_name, roles.role_id, roles.role_name, user_role.user_id FROM ((users INNER JOIN roles ON users.user_id = roles.role_id) INNER JOIN user_role ON roles.role_id = user_role.role_id) WHERE users.user_email = '$email';");

 $check_login_query = mysqli_num_rows($select_user_role);

 if($check_login_query == 1){
        $row = mysqli_fetch_array($select_user_role);
        $role = $row['role_id'];
        $user = $row['user_id'];
        $admin = $row['role_name'];

    switch($admin){
        case "Admin": 
        include "dashboard/admin-dashboard.php";
        break;

        case "Agents":
        include "dashboard/agents-dashboard.php";
        break;

        
        case "Users":
        include "dashboard/user-dashboard.php";
        break;

        default:
        echo "silence is golden";
        //header("Location: ../login.php");
        die();
        break;
    }
}

?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>