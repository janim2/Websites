<?php
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}else{
    require_once('config.php');
    session_start();
    $login_query = $con->prepare("SELECT COUNT(1) AS num FROM admin_users WHERE email = ? and admin_password = ?");
    
    $login_query->execute(array($_POST['email'],$_POST['password']));
    $login_check = $login_query->fetch();
    
    if($login_check["num"] == 1){
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['email'];
        $_SESSION['id'] = $id;
        setcookie("isloggedin","true",time() + (6400), "/");
        echo 'Welcome ' . $_SESSION['loggedin'] . '!';
	header('Location: upload_news.php');
    }else{
        die ("Incorrect User ID or Pin");
    }
}

?>
