<?php
$conn=new mysqli("127.0.0.1", "root", "", "smart_attendence");

if(!$conn){
    echo "<script>alert('Failed to connect to the server try again');</script>";
}

?>