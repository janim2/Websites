<?php
    require_once('config.php');
    session_start();
    $news_id = $_GET["id"];
    $news_caption = $_POST["cap"];
    $news_message = $_POST["message"];
    $update_query = $con->prepare("UPDATE news SET news_caption = ?, news_message = ? WHERE news_id = ?");
    
    $update_check = $update_query->execute(array($news_caption,$news_message,$news_id));
    
    if($update_check){
	header("Refresh:0; url=edit_news.php?id=".$news_id);
    }else{
        die ("Cannot update news");
    }

?>
