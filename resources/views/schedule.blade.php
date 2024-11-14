<?php

$con=mysqli_connect("localhost","root","","animaliya_project");

if(mysqli_connect_error()){
   echo"Can't connect to database";
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/style3.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav>
       <div class="name">Animaliya</div>
       <ul>
        <li><a href="doctor">Back</a></li>
       </ul>

    </nav>

    <div class="container " style="margin-top: 180px;">
        <div class="row">
            <div class="col-lg-12">
            <table class="table text-center table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Apointment ID</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
      $query="SELECT * FROM `schedule`";
      $user_result=mysqli_query($con,$query);
      while($user_fetch=mysqli_fetch_assoc($user_result))
      {
        echo"
    <tr>
      <td>$user_fetch[Apointment_Id]</td>
      <td>$user_fetch[Full_Name]</td>
      <td>$user_fetch[Phone_No]</td>
      <td>$user_fetch[Date]</td>
      <td>$user_fetch[Time]</td>
      </tr>
    ";
      }

    ?>
    
    </tbody>
  </table>
 </div>
 </div>

</div>
    
</body>
</html>