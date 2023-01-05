<html>
    <head>
        <style>
            .error{color:#FF0000;}
        </style><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
        <script>
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>
    </head>
<body>
<?php
$pincode = $country = $state = $city =$occupation = $nameErr = $emailErr = $genderErr = $mobileErr =$dobErr = "";
$pincodeErr = $cityErr = $countryErr = $stateErr = $occupationErr =$name = $email = $gender = $mobile = $dob = "";
$name1Err = $dob1Err = $name2Err = $dob2Err = "";
$name1 = $dob1 = $dob2 = $pincode2 = "";
$institute = $address = $degree = $degreeErr = "";
$instituteErr = $addressErr = $pincode2Err = "";
$occupation1 = $occupation1Err = $name2 = "";
$error = 0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //name of candidate
    if(empty($_POST["name"]))
    {
        $error = 1;
        $nameErr ="Name is required";
    }
    else
    {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
        {
            $nameErr = "Only letter and white spaces are allowed";
            $error = 1;
        }
    }

    //name of father
    if(empty($_POST["name1"]))
    {
        $error = 1;
        $name1Err ="Name is required";
    }
    else
    {
        $name1 = test_input($_POST["name1"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name1))
        {
            $name1Err = "Only letter and white spaces are allowed";
            $error = 1;
        }
    }
    //name of mother
    if(empty($_POST["name2"]))
    {
        $error = 1;
        $name2Err ="Name is required";
    }
    else
    {
        $name2 = test_input($_POST["name2"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name2))
        {
            $name2Err = "Only letter and white spaces are allowed";
            $error = 1;
        }
    }
    

    //email of student
    if(empty($_POST["email"]))
    {
        $erroe =1;
        $emailErr ="Email is required";
    }
    else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
            $error = 1;
        }
    }

    //dob of student
    if(empty($_POST["dob"]))
    {
        $error = 1;
        $dobErr = "Date of Birth is required";
    }
    else
    {
        $dob = test_input($_POST["dob"]);
    }

    //dob of father
    if(empty($_POST["dob1"]))
    {
        $error = 1;
        $dob1Err = "Date of Birth is required";
    }
    else
    {
        $dob1 = test_input($_POST["dob1"]);
    }

    //dob of mother
    if(empty($_POST["dob2"]))
    {
        $error = 1;
        $dob2Err = "Date of Birth is required";
    }
    else
    {
        $dob2 = test_input($_POST["dob2"]);
    }

    //mobile of student
    if(empty($_POST["mobile"]))
    {
        $error = 1;
        $mobileErr = "Mobile number is required";
    }
    else
    {
        $mobile = test_input($_POST["mobile"]);
        if(!preg_match('/^[0-9]{10}+$/', $mobile))
        {
            $mobileErr = "Invalid mobile number";
            $error = 1; 
        }
    }

    //gender of student
    if(empty($_POST["gender"]))
    {
        $error = 1;
        $genderErr = "Gender is required";
    }
    else
    {
        $gender = test_input($_POST["gender"]);
    }

    //occupation of father
    if(empty($_POST["occupation"]))
    {
        $error = 1;
        $occupationErr = "Occupation is required";
    }
    else
    {
        $occupation = test_input($_POST["occupation"]);
    }

    //occupation of mother
    if(empty($_POST["occupation1"]))
    {
        $error = 1;
        $occupation1Err = "Occupation is required";
    }
    else
    {
        $occupation1 = test_input($_POST["occupation1"]);
    }

    //countary of student
    if(empty($_POST["country"]))
    {
        $error = 1;
        $countryErr ="Country is required";
    }
    else
    {
        $country = test_input($_POST["country"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$country))
        {
            $countryErr = "Only letter and white spaces are allowed";
            $error = 1;
        }
    }

    //state of student
    if(empty($_POST["state"]))
    {
        $error = 1;
        $stateErr ="State is required";
    }
    else
    {
        $state = test_input($_POST["state"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$state))
        {
            $stateErr = "Only letter and white spaces are allowed";
            $error = 1;
        }
    }

    //city of student
    if(empty($_POST["city"]))
    {
        $error = 1;
        $cityErr ="City is required";
    }
    else
    {
        $city = test_input($_POST["city"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$city))
        {
            $cityErr = "Only letter and white spaces are allowed";
            $error = 1;
        }
    }

    //pincode of student
    if(empty($_POST["pincode"]))
    {
        $error = 1;
        $pincodeErr = "pincode is required";
    }
    else
    {
        $pincode = test_input($_POST["pincode"]);
    }

    //name of institute
    if(empty($_POST["institute"]))
    {
        $error = 1;
        $instituteErr = "Institute is required";
    }
    else
    {
        $institute = test_input($_POST["institute"]);
    }

        //address of institute
    if(empty($_POST["address"]))
    {
        $error = 1;
        $addressErr = "Address is required";
    }
    else
    {
        $address = test_input($_POST["address"]);
    }

    //pincode of institute
    if(empty($_POST["pincode2"]))
    {
        $error = 1;
        $pincode2Err = "pincode is required";
    }
    else
    {
        $pincode2 = test_input($_POST["pincode2"]);
    }

    //degree of student
    if(empty($_POST["degree"]))
    {
        $error = 1;
        $degreeErr = "Degree is required";
    }
    else
    {
        $degree = test_input($_POST["degree"]);
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

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

<center><h1>-------Student Form-------</h1></center>
<p><span class ="error">*required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype ="multipart/form-data">
<center>
<img id="previewImg" style="width:200px;height:250px;border:1px solid black;"  src="/examples/images/transparent.png">    
         <p>
            <input type="file" name="photo"  onchange="previewFile(this);" style="margin-left: 75px;" required >
        </p>
        </center>    
        

<table>
    <tbody>

<tr><td>Name:</td>
 <td><input type="text" name ="name" value="<?php echo @$_POST['name'];?>">
<span class = "error">* <?php echo $nameErr; ?></span>
</td></tr> 


<tr><td>DOB:</td>
 <td><input type="date" name = "dob" value="<?php echo @$_POST['dob'] ?>">
<span class = "error">* <?php echo $dobErr; ?></span>
</td></tr>


<tr><td>E-mail:</td>
 <td><input type="text" name = "email" value = "<?php echo @$_POST['email'];?>">
<span class = "error">* <?php echo $emailErr; ?></span>
</td></tr>


<tr><td>Mob No.:</td>
 <td><input type="number" name= "mobile" value = "<?php echo @$_POST['mobile'];?>">
<span class = "error">* <?php echo $mobileErr; ?></span>
</td></tr>

<hr style="text-align:left;margin-left:0">
<h2>Student Details</h2>
</tbody></table>

<table><tbody>
Gender: 
<input type="radio" name="gender"
<?php if(isset($gender) && $gender=="male") echo $_POST['gender']; ?>
    value="male">Male
<input type="radio" name="gender"
<?php if(isset($gender) && $gender=="female") echo $_POST['gender']; ?>
    value="female">Female
<input type="radio" name="gender"
<?php if(isset($gender) && $gender=="other") echo $_POST['gender']; ?>
    value="other">Others
<span class = "error">* <?php echo $genderErr; ?></span>

</tbody>
</table>




<table><tbody>
<tr><td>Name:</td>
 <td><input type="text" name ="name1" value="<?php echo @$_POST['name1'];?>">
<span class = "error">* <?php echo $name1Err; ?></span>
</td></tr>


<tr><td>DOB:</td>
 <td><input type="date" name = "dob1" value="<?php echo @$_POST['dob1'] ?>">
<span class = "error">* <?php echo $dob1Err; ?></span>
</td></tr>


<tr><td>Occupation:</td>
 <td><input type="text" name ="occupation" value="<?php echo @$_POST['occupation'] ?>">
<span class = "error">* <?php echo $occupationErr; ?></span>
</td></tr>

<hr style="text-align:left;margin-left:0">
<h2>Family Details</h2>
<h3>Father's Details</h3> 
</tbody></table>

<table><tbody>
 

<tr><td>Name:</td>
 <td><input type="text" name ="name2" value="<?php echo @$_POST['name2'];?>">
<span class = "error">* <?php echo $name2Err; ?></span>
</td></tr>


<tr><td>DOB:</td>
 <td><input type="date" name = "dob2" value="<?php echo @$_POST['dob2'] ?>">
<span class = "error">* <?php echo $dob2Err; ?></span>
</td></tr>


<tr><td>Occupation: </td>
<td><input type="text" name ="occupation1" value="<?php echo @$_POST['occupation1'] ?>">
<span class = "error">* <?php echo $occupation1Err; ?></span>
</td></tr>

<h3>Mother's Details</h3>
</tbody></table>

<table><tbody>


<tr><td>Country:</td>
 <td><input type="text" name="country" value ="<?php echo @$_POST['country'];?>">
<span class ="error">* <?php echo $countryErr; ?></span>
</td></tr>


<tr><td>State:</td>
 <td><input type="text" name="state" value ="<?php echo @$_POST['state'];?>">
<span class ="error">* <?php echo $stateErr; ?></span>
</td></tr>


<tr><td>City:</td>
 <td><input type="text" name="city" value ="<?php echo @$_POST['city'];?>">
<span class ="error">* <?php echo $cityErr; ?></span>
</td></tr>


<tr><td>Pincode: </td>
<td><input type="number" name="pincode" value ="<?php echo @$_POST['pincode'];?>">
<span class ="error">* <?php echo $pincodeErr; ?></span>
</td></tr>

<hr style="text-align:left;margin-left:0">
<h2>Address Details</h2>
</tbody></table>

<table><tbody>


<tr><td>Name of Institute:</td>
<td> <input type="text" name="institute" value="<?php echo @$_POST['institute'];?>">
<span class ="error">* <?php echo $instituteErr; ?></span>
</td></tr>


<tr><td>Address:</td>
 <td><input type="text" name="address" value="<?php echo @$_POST['address'];?>">
<span class ="error">* <?php echo $addressErr; ?></span>
</td></tr>


<tr><td>Pincode:</td>
 <td><input type="number" name="pincode2" value ="<?php echo @$_POST['pincode2'];?>">
<span class ="error">* <?php echo $pincode2Err; ?></span>
</td></tr>


<tr><td>Degree:</td>
 <td><input type="text" name="degree" value="<?php echo @$_POST['degree'];?>">
<span class ="error">* <?php echo $degreeErr; ?></span>
</td></tr>
<hr style="text-align:left;margin-left:0">
<h2>Education Details</h2>
</tbody>
</table>

<center><input type="submit" name="submit" value="submit"></center>   
</form>

<?php
if($error == 0)
{
    echo "Your Input";
    echo "<br>";
    echo $name;
    echo "<br>";
    echo $dob;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $mobile;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $name1;
    echo "<br>";
    echo $dob1;
    echo "<br>";
    echo $occupation;
    echo "<br>";
    echo $name2;
    echo "<br>";
    echo $dob2;
    echo "<br>";
    echo $occupation1;
    echo "<br>";
    echo $country;
    echo "<br>";
    echo $state;
    echo "<br>";
    echo $city;
    echo "<br>";
    echo $pincode;
    echo "<br>";
    echo $institute;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $pincode2;
    echo "<br>";
    echo $degree;
    echo "<br>";

}
?>
</body>
</html>