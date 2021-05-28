<?php

//  connecting to the database

 $servername = "localhost:3307";
 $username = "root";
 $password = "";
 $database="internship for you";
 
 $link =mysqli_connect($servername,$username,$password,$database);
  
 if($_POST)
  {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email"];
    $query = $_POST["query"];
    $gender =$_POST["gender"];
     
     $submit=$_POST["submit"];
     
     if(!empty($submit))
     {
       echo'<div style="text-align:center;" class="alert alert-success">
       <strong>Success!</strong> Your form has been submitted.             
     </div>';
     }
  
     $query = "INSERT INTO `contact` (`name`,`email`,`mobile`,`query`, `gender`) VALUES('$name','$email','$mobile','$query','$gender')";   
     
     mysqli_query($link,$query);


      }




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <div class="containers"></div>
  <nav class="navbar" style="align-items: center;">
    <ul class="navlist">
      <div>
        <img src="logo.png" style="width: 250px;" alt="">
      </div>
      <a href="iindex.php">
        <li class="list-item"> Home</li>
      </a>
      <a href="#">
        <li class="list-item"> About</li>
      </a>
      <a href="#">
        <li class="list-item"> Internships</li>
      </a>
      <a href="apply.html">
        <li class="list-item">Contact</li>
      </a>

    </ul>

  </nav>
  <form class="border border-dark" style="margin-top:50px; padding: 20px; border-radius: 18px;" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
    </div>
    <div class="mb-3">
      <label for="mobile" class="form-label">Phone Number</label>
      <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Your Mobile Number">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="textarea" class="form-label">Query</label>
      <textarea class="form-control" id="textarea" name="query" rows="3"></textarea>
    </div>
    <div class="text-center">
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
        <label class="form-check-label" for="male">Male</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
        <label class="form-check-label" for="female">Female</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
        <label class="form-check-label" for="other">Others</label>
      </div>
      <div class="text-center"><button type="submit" name="submit" id="submit"
          style="padding: 1.5px;width: 100px;height: 40px;font-size: large; text-align: center; margin-top: 20px;"
          class="btn btn-success"  onclick="clicked(event)"value="submit" >Submit</button></div>

    </div>
  </form>
  <footer class="footer" style="margin-top:30px;">
    2021 &copy; All-Rights-Are-Reserved
  </footer>
  <script type="text/javascript">
     
//      function clicked(e)
//  {
//     alert("<div class='alert alert-success'>Your form has been submited</div>");
 
// }


  </script>
</body>

</html>