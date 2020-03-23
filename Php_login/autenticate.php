<?php
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}else{
    require_once('config.php');
    session_start();
    $login_query = $con->prepare("SELECT COUNT(1) AS num FROM accounts WHERE username = ? and password = ?");
    
    $login_query->execute(array($_POST['username'],$_POST['password']));
    $login_check = $login_query->fetch();
    
    if($login_check["num"] == 1){
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        echo 'Welcome ' . $_SESSION['name'] . '!';
        echo "Login Successful";
    }else{
        echo "Incorrect User ID or Pin";
    }
}

?>