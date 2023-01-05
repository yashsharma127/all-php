<?php

if(isset($_POST['submit']))
{
    upload_image();
}

function upload_image()
{
    $uploadTo = "uploads/";
    $allowedImageType = array('jpg','png','jpeg','gif','pdf','doc');
    $imageName = $_FILES['file']['name'];
    $tempPath=$_FILES["file"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 
         // Upload file to server 
         if(move_uploaded_file($tempPath,$originalPath)){ 
            echo $fileName." was uploaded successfully";
           // write here sql query to store image name in database
          
          }else{ 
            echo 'image Not uploaded ! try again';
          } 
      }else{
         echo $imageType." image type not allowed";
      }
   }else{  
    echo "Please Select a image";
   }       
}




?>