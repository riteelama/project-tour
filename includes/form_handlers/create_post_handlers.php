<?php
//Declaring variable to prevent errors
$title = ""; //Title
$content = ""; //Content
$error_array = array(); //Holds error messages

if(isset($_POST["create_post"])){

    //Registration form values

    //First Name
    $title = strip_tags($_POST['title']); //Removes html tags
    // $title = str_replace(' ','',$title); //removes spaces
    // $title = ucfirst(strtolower($title)); //Uppercase first letter
    $_SESSION['title'] = $title; //stores first name into session

    //Last Name
    $content = strip_tags($_POST['content']); //Removes html tags
    $_SESSION['content'] = $content; //stores last name into session

    $thumbnail = "";

    $category_ids = "1";

    $user_id = "1";

    $post_created = date('Y-m-d hh:mm:ss');

    $post_updated = date('Y-m-d hh:mm:ss');


    if(empty($title) ){
        array_push($error_array,"Please Enter Title<br/>");
    }

    if(empty($error_array)){

        $query = mysqli_query($con, "INSERT INTO posts VALUES ('', '$title', '$content', '$thumbnail', '$category_ids','$user_id','$post_created','$post_updated') ");

            array_push($error_array, "<span style='color:#14c800;'> You're all set! Go ahead and login!</span><br>");

            //Clear session variables
            $_SESSION['title'] = "";
            $_SESSION['content'] = "";
            // $_SESSION['thumbnail'] = "";
            // $_SESSION['category_ids'] = "";
            // $_SESSION['post_created'] = "";
            // $_SESSION['post_updated'] = "";
         }
    }


if( isset( $_GET['type'] ) && ( $_GET['type'] == 'posts' ) && empty( $_GET['task'])){
    
    $posts_dbquery = mysqli_query($con, "SELECT * FROM posts");

    array_push($error_array, "<span style='color:#14c800;'> You're all set! Go ahead and login!</span><br>");

    $posts_query = mysqli_num_rows($posts_dbquery);

    // if($posts_query > 0){
    //     $all_posts = mysqli_fetch_array($posts_dbquery);
    //     //$username = $row['user_name'];
    // }

    // Fetch all
    $posts = mysqli_fetch_all($posts_dbquery, MYSQLI_ASSOC);

    //var_dump($posts);

    // Free result set
    //$posts_res = mysqli_free_result($posts_dbquery);
}


?>