<?php
include 'database.php';

if(isset($_POST['checking_edit_btn']))
{
    $s_id = $_POST['student_id'];

    $result_array = [];

    $query = "SELECT * FROM `employee` where EmployeeID='$s_id' ";
    $query_run = mysqli_query($conn,$query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $res)
        {
            array_push($result_array, $res);
            header('Content-type: application/json');
            echo json_encode($result_array);  
        }
    }
    else
    {
        echo $return = "<h5>No Record Found</h5>"
    }
}


?>