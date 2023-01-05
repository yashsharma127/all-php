<html>
<head>
<style>
.error {color:#FF0000;}
</style>
</head>
<body>

<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $website = $comment ="";
$error = 0;
print_r($_FILES);
if($_SERVER["REQUEST_METHOD"] == "POST")
{   
    
    if(empty($_POST["name"]))
    {
        $error = 1;
        $nameErr = "Name is required";
    }
    else
    {
        $name = test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
        {
            $nameErr = "Only Letters and White Spaces are allowed";
            $error = 1;
        }
        
    }

    if(empty($_POST["email"]))
    {
        $error = 1;
        $emailErr = "Email is required";
    }
    else
    {$email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
            $error = 1;
        }
        
    }
    
    if(empty($_POST["website"]))
    {
        $error = 1;
        $websiteErr = "Field is required";
    }
    else
    {
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
        {
            $websiteErr = "Invalid URL";
            $error = 1;
        }
        
    }

    if(empty($_POST["comment"]))
    {
        $comment = "";
    }
    else
    {
        $comment = test_input($_POST["comment"]);
    }

    if(empty($_POST["gender"]))
    {
        $genderErr = "Gender is required";
    }
    else
    {
        $gender = test_input($_POST["gender"]);
    }

    
}   
function test_input($data)
{
    $data = trim($data);
    $data =stripslashes($data);
    $data =  htmlspecialchars($data);
    return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class= "error">*required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

Name: <input type= "text" name= "name" value="<?php echo @$_POST['name'];?>">
<span class ="error">* <?php echo $nameErr;?></span>
<br></br>

E-mail: <input type="text" name ="email" value="<?php echo @$_POST['email'] ?>">
<span class = "error">* <?php echo $emailErr;?></span>
<br></br>

Website: <input type="text" name="website" value= "<?php echo @$_POST['website'] ?>">
<span class="error"><?php echo $websiteErr; ?></span>
<br></br>

Comment: <textarea name = "comment" rows="5" cols"40"><?php echo @$_POST['comment'] ?></textarea>
<br></br>

Gender:
<input type="radio" name="gender" 
    <?php if(isset($gender) && $gender=="male") echo $_POST['gender'];?>
    value="male">Male
<input type="radio" name="gender" 
    <?php if(isset($gender) && $gender=="female") echo $_POST['gender']; ?>
    value="female">Female
<input type="radio" name="gender" 
    <?php if(isset($gender) && $gender=="other") echo $_POST['gender']; ?>
    value="other">Others
<span class = "error">* <?php echo $genderErr;?></span>
<br></br>
<input type="file" name="file">
<br></br>
<input type="submit" name="submit" value="submit">
</form>

<?php
if($error == 0){
echo "Your Input: ";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
}

echo "Filename: " .$_FILES['file']['name']."<br>";
echo "Type: " .$_FILES['file']['type']."<br>";
echo "Size: " .$_FILES['file']['size']."<br>";
echo "Temp name: " .$_FILES['file']['tmp_name']."<br>";
echo "Error: " .$_FILES['file']['error']."<br>";


?>




</body>
</html>