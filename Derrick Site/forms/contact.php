<?php
  echo "<script>
    var loading_element = document.getElementsByClassName('loading');
    loading_element.style.visibility = 'visible'; 
  </script>";

  if(isset($_POST["email"])){
    
    require_once('config.php');
    session_start();

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $upload_query = $con->prepare("INSERT INTO messages(name,email,subject,message) 
    VALUES(?,?,?,?)");

    $upload_check = $upload_query->execute(array($name,$email,$subject,$message));
    
    if($upload_check){
      echo "<script>alert('Mail was sent !');</script>";
      echo "<script>document.location.href='../index.php'</script>";
      // header("Refresh:0; url=upload_news.php");
    }else{
        die ("Message not sent");
    }


  }else{
    echo "Something went wrong";
  }
?>


    
