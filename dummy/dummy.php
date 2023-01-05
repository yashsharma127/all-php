<html>
    <head>
        <style>
            .error{color:#FF0000;}
        </style><script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        
    </head>
<body>
    <!-- Making Form -->
<div>
            <center><h1>-------Student Form-------</h1></center>
            <p><span class ="error">*required field</span></p>
            <form method="post" action="" >
            
            
            <table>
                <tbody>

            <tr><td>Name:</td>
            <td><input type="text" name ="name" value="<?php echo @$_POST['name'];?>">
            <span class = "error">* </span>
            </td></tr> 

            <tr><td>E-mail:</td>
            <td><input type="text" name = "email" value = "<?php echo @$_POST['email'];?>">
            <span class = "error">* 


            </tbody>
            </table>

            <input type="submit" name="submit" value="reg">  
            </form>
</div>

<!-- Server connnecting and data insert -->
<div>
        <?php
        if(isset($_POST['submit']) && $_POST['submit'] === 'reg')
        {
            $name = $email = "";

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "dummy";

            $conn = mysqli_connect($servername,$username,$password,$database);
            if(!$conn)
            {
            die("Sorry we failed to connect: ".mysqli_connect_error());
            }
        
                    if(isset($_POST['name'])){
                    $name =  $_REQUEST['name'];}
                    
                    if(isset($_POST['email'])){
                    $email =  $_REQUEST['email'];}

                    
                    $sql = "INSERT INTO `user`(`name`, `email`) VALUES ('$name','$email')";
                
                if(mysqli_query($conn, $sql)){?>
                    <script>alert('Request send successful');</script>
                <?php header('Refresh:1');
            } 
                    else{
                        echo "ERROR: Hush! Sorry $sql. "
                            . mysqli_error($conn);    
                    }
            
            // header("location:dummy.php");
        }
        ?>
</div>

</body>
</html>