<?php
session_start();

$con=mysqli_connect("localhost","root","","animaliya_project");

if(mysqli_connect_error()){
   echo"<script>
   alert('Can't connect to database');
   window.location.href='apointment';
   </script>";
    exit();
}

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    if(isset($_GET['token']))
    {
       $query1="INSERT INTO `apointment`(`Full_Name`, `Phone_No`) VALUES ('$_GET[Name]','$_GET[Number]')";
      if(mysqli_query($con,$query1))
      {
        echo"<script>
        alert('Request for appointment done. please take a look to the schedule page.');
        window.location.href='doctor';
        </script>";
      }
      else
      {
        echo"<script>
    alert('Can't connect to database');
    window.location.href='apointment';
    </script>";
    
      }
    }
}

?>