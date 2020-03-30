<?php
    require_once('config.php');
    session_start();
    if(isset($_POST['caption'])){

        $image = $_FILES['theimage']['name'];
        $caption = $_POST['caption'];
        $message = $_POST['message'];

        // $target = "images/uploads".basename($image);
        // $upload_query = $con->prepare("INSERT INTO news(news_image,news_caption,news_message) 
        // VALUES(?,?,?)");
        // $upload_check = $upload_query->execute(array("images/uploads".$image,$caption,$message));
        // if (move_uploaded_file(resize_image($_FILES['theimage']['tmp_name'],789,800), $target)) {
        //     if($upload_check){
        //         // header("Refresh:0s; url=upload_news.php");
        //         }else{
        //             die ("Upload failed");
        //         }
        // }else{
        //     echo "Failed to upload image";
        // }

        $image_process = 0;
        if(is_array($_FILES)){
            $fileName = $_FILES['theimage']['tmp_name'];
            $sourceproperties = getimagesize($fileName);
            $resizefilename = time();
            $upload_path = "images/uploads/";
            $fileExt = pathinfo($_FILES['theimage']['name'],PATHINFO_EXTENSION);

            $uploadimagetype = $sourceproperties[2];
            $sourceimagewidth = $sourceproperties[0];
            $sourceimageheight = $sourceproperties[1];

            switch($uploadimagetype){
                case IMAGETYPE_JPEG:
                    $resource_type = imagecreatefromjpeg($fileName);
                    $imageLayer = resize_image($resource_type, $sourceimagewidth, $sourceimageheight);
                    imagejpeg($imageLayer, $upload_path."thumb_".$resizefilename.".".$fileExt);
                    upload_news($con, "thumb_".$resizefilename.".".$fileExt, $caption, $message);

                    break;

                case IMAGETYPE_GIF:
                    $resource_type = imagecreatefromgif($fileName);
                    $imageLayer = resize_image($resource_type, $sourceimagewidth, $sourceimageheight);
                    imagegif($imageLayer, $upload_path."thumb_".$resizefilename.".".$fileExt);
                    upload_news($con, "thumb_".$resizefilename.".".$fileExt, $caption, $message);

                    break;

                case IMAGETYPE_PNG:
                    $resource_type = imagecreatefrompng($fileName);
                    $imageLayer = resize_image($resource_type, $sourceimagewidth, $sourceimageheight);
                    imagepng($imageLayer, $upload_path."thumb_".$resizefilename.".".$fileExt);
                    upload_news($con, "thumb_".$resizefilename.".".$fileExt, $caption, $message);

                    break;

                default:
                    $image_process = 0;
                    break;
            }

            move_uploaded_file($fileName, $upload_path.$resizefilename.".".$fileExt);
            $image_process = 1;

        }
        if($image_process == 1){
            echo "resize done";
        }else{
            echo "Failed";
        }
    }

    function resize_image($resource_type, $image_width, $image_height) {
       $resize_width = 780;
       $resize_height = 800;
       $image_layer = imagecreatetruecolor($resize_width, $resize_height);
       imagecopyresampled($image_layer, $resource_type,0,0,0,0,
       $resize_width,$resize_height,$image_width,$image_height);
       return $image_layer;
    }

    function upload_news($connection,$resized_image_name,$thecaption, $themesssage){
        $upload_query = $connection->prepare("INSERT INTO news(news_image,news_caption,news_message) 
        VALUES(?,?,?)");
        $upload_check = $upload_query->execute(array("images/uploads/".$resized_image_name,$thecaption,$themesssage));
        if($upload_check){
            header("Refresh:0s; url=upload_news.php");
            }else{
                die ("Upload failed");
            }
    }
?>
