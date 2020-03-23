<?php
    require_once('config.php');
    session_start();
    // $image = $_POST['image'];
    $caption = $_POST['caption'];
    $message = $_POST['message'];

    // $random_name = rand(4344,4343434);
    $target_dir = "../images/";
    $target_file = $target_dir . basename($_FILES["theimage"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["theimage"]["tmp_name"]);

    if(move_uploaded_file($_FILES["theimage"]["tmp_name"], $target_file)){
        echo "uploaded";
    }

    $upload_query = $con->prepare("INSERT INTO news(news_image,news_caption,news_message) 
    VALUES('https://www.jimdo.com/static/6ddd0047c5c518accffa2abb6db438c9/a056a/hero_visual_en.png',?,?)");

    $upload_check = $upload_query->execute(array($caption,$message));
    
    if($upload_check){
    header("Refresh:0; url=upload_news.php");
    }else{
        die ("Upload failed");
    }


function imageResize($imageSrc,$imageWidth,$imageHeight) {

    $newImageWidth =800;
    $newImageHeight =784;

    $newImageLayer=imagecreatetruecolor($newImageWidth,$newImageHeight);
    imagecopyresampled($newImageLayer,$imageSrc,0,0,0,0,$newImageWidth,$newImageHeight,$imageWidth,$imageHeight);

    return $newImageLayer;
}
?>
