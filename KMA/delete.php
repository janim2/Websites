<?php
    require_once('config.php');
    session_start();
    $news_id = $_GET["id"];
    $delete_query = $con->prepare("DELETE FROM news WHERE news_id = ?");
    
    $delete_check = $delete_query->execute(array($news_id));
    
    if($delete_check){
	header("Refresh:0; url=upload_news.php");
    }else{
        die ("Cannot delete news");
    }

?>
