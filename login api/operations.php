<?php

class operations
{
    public $conn = null;
    function_construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $database ="demoapi";

       $this->$conn = mysqli_connect($host,$user,$password,$database);
    }
    public function setUser($name,$email,$password)
    {
        $query ="insert into tbl_user(name,email,password) values('$name','$email','$password')";
        $result =mysqli_query($this->conn,$query);

        if($result !== null)
        {
            return 1;
        }
        else
        {
            die('error'.mysqli_error($this->conn));
            return 0;
        }
    }
}


?>