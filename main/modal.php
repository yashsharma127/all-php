<head>
<style>.error{color:#FF0000;}</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>


<?php
$nameErr = $dobErr = $dojErr = $emailErr = $mobileErr = $addressErr ="";
$Firstname = $Lastname = $Date_of_Birth = $Date_of_Joining = $Email = $Phone = $Address = "";
 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "attendance";
        
        $conn = mysqli_connect($servername,$username,$password,$database);
         
        // Check connection
        if(!$conn)
        {
            die("Sorry we failed to connect: ".mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        
        if(isset($_POST['Firstname'])){
        $Firstname =  $_REQUEST['Firstname'];
        }
        if(isset($_POST['Firstname'])){
        $Lastname =  $_REQUEST['Lastname'];
        }
        if(isset($_POST['Firstname'])){
        $Date_of_Birth = $_REQUEST['Date_of_Birth'];
        }
        if(isset($_POST['Firstname'])){
        $Email = $_REQUEST['Email'];
        }
        if(isset($_POST['Firstname'])){
        $Phone =  $_REQUEST['Phone'];
        }
        if(isset($_POST['Firstname'])){
        $Address = $_REQUEST['Address'];
        }
        if(isset($_POST['Firstname'])){
        $Date_of_Joining = $_REQUEST['Date_of_Joining'];
        }
         
        $sql = "INSERT INTO employee(Firstname,Lastname,Date_of_Birth,Email,Phone,Address,Date_of_Joining)   
        VALUES ('$Firstname','$Lastname','$Date_of_Birth','$Email','$Phone','$Address','$Date_of_Joining')";
         
         if(mysqli_query($conn, $sql)){
            // echo "<h3>data stored in a database successfully."
            //     . " Please browse your localhost php my admin"
            //     . " to view the updated data</h3>";
 
            // echo nl2br("\n$Firstname\n $Lastname\n "    
            //     . "$Date_of_Birth\n $Address\n $Email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>


<div class="add_button">
<a  href = "id=<?php echo $res['EmployeeID']; ?>"
              
                data-bs-toggle="modal" data-bs-target="#updateModal" title="Update">
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Open modal
  </button>
</div>



<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Fill the details</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <p><span class ="error">*required field</span></p>
      <form method="post" action="" enctype ="multipart/form-data">
        <table>
    <tbody>

<tr><td><label for="FirstName">Firstname:</label></td>
 <td><input type="text" name ="Firstname" value="<?php echo @$_POST['Firstname'];?>">
<span class = "error">* <?php echo $nameErr; ?></span>
</td></tr> 

<tr><td><label for="LastName">Lastname:</label></td>
 <td><input type="text" name ="Lastname" value="<?php echo @$_POST['Lastname'];?>">
<span class = "error">* <?php echo $nameErr; ?></span>
</td></tr> 

<tr><td><label for="Date_of_Birth">Date of Birth:</label></td>
 <td><input type="date" name = "Date_of_Birth" value="<?php echo @$_POST['Date_of_Birth'] ?>">
<span class = "error">* <?php echo $dobErr; ?></span>
</td></tr>


<tr><td><label for="Email">Email:</label></td>
 <td><input type="text" name = "Email" value = "<?php echo @$_POST['Email'];?>">
<span class = "error">* <?php echo $emailErr; ?></span>
</td></tr>


<tr><td><label for="Phone">Phone:</label></td>
 <td><input type="number" name= "Phone" value = "<?php echo @$_POST['Phone'];?>">
<span class = "error">* <?php echo $mobileErr; ?></span>
</td></tr>
            
<tr><td><label for="Address">Address:</label></td>
 <td><input type="text" name ="Address" value="<?php echo @$_POST['Address'];?>">
<span class = "error">* <?php echo $addressErr; ?></span>
</td></tr> 

<tr><td><label for="Date_of_Joining">Date of Joining:</label></td>
 <td><input type="date" name = "Date_of_Joining" value="<?php echo @$_POST['Date_of_Joining'] ?>">
<span class = "error">* <?php echo $dojErr; ?></span>
</td></tr>

</tbody>    
</table>



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
      <button type="submit" id = "submit" class="btn btn-danger" data-bs-dismiss="modal">Submit</button>
      </div>

      </form>
      </div>
  </div>
</div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#submit').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var Firstname 	= $('#Firstname').val();
			var Lastname	= $('#Lastname').val();
            var Date_of_Birth	= $('#Date_of_Birth').val();
            var Address	= $('#Address').val();
			var Email 		= $('#Email').val();
			var Phone = $('#Phone').val();
            var Date_of_Joining = $('#Date_of_Joining').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					// url: 'process.php',
					data: {Address: Address,Firstname: Firstname,Lastname: Lastname,Email: Email,Phone: Phone,Date_of_Birth: Date_of_Birth,Date_of_Joining: Date_of_Joining,},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								//'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});
			}else{
			}
		});			
	});
      </script>
   

</body>
</html>







