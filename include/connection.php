<?php
$proname="TRANSCRIPT MANAGEMENT SYSTEM";
$conn=mysqli_connect("localhost", "root", "", "transcript");
if(!$conn){
    die(mysqli_error($conn)."Error connecting Database!");
}
?>