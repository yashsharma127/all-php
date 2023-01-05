<html>
<head>
</head> 
<body>
<?php

if(isset($_FILES['photo']))
{
    upload_image();
}

function upload_image()
{   
    
    $uploadTo = "uploads/";
    if ( !is_dir( $uploadTo)) 
    {
        mkdir( $uploadTo );       
    }
    $allowedImageType = array('jpg','png','jpeg','gif','pdf','doc');
    $imageName = $_FILES['photo']['name'];
    $tempPath=$_FILES["photo"]["tmp_name"];
   
    $basename = basename($imageName);
    $originalPath = $uploadTo.$basename; 
    $imageType = pathinfo($originalPath, PATHINFO_EXTENSION); 
    if(!empty($imageName)){ 
    
       if(in_array($imageType, $allowedImageType)){ 
         // Upload file to server 
         if(move_uploaded_file($tempPath,$originalPath)){ 
            echo $imageName." was uploaded successfully";
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
    <form method="post"  enctype="multipart/form-data">
        <p>
            <input type="file" name="photo"  required>
        </p>
        <img id="previewImg" src="/examples/images/transparent.png" alt="Placeholder">
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
    
</body>
</html>