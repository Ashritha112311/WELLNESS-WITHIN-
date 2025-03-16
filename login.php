<?php
// login.php

session_start();
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM `registration` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        header("Location: p1.php");
        exit();
    } else {
        echo '<!doctype html><html><body><div class="alert alert-danger" role="alert">
        OHHH NOOO!!!Looks like there is no user with that name ..please enter correct one..
      </div> </body></html>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <title>LOGIN PAGE</title>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6EP3EB5TraW64iM3uVz_m1dHYkzcWiZb32Q&s') no-repeat center center fixed;
      background-size: 45%;
      font-family: 'Arial', sans-serif;
      color: #333;
    }
    .profile-container {
      max-width: 500px;
      margin: auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }
    .profile-header {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-text a {
      color: #007bff;
      text-decoration: none;
    }
    .form-text a:hover {
      text-decoration: underline;
    }
   
    label {
      color: #28a745; 
    }
  </style>
</head>
<body>

   <h1 class="text-center">Login to our Website</h1>
<div class="container mt-5">
<form action="login.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">UserName</label>
    <input type="text" class="form-control"  placeholder="Enter username" name="username">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  placeholder="Enter Password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
  
</form>
</div>
<script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username === "") {
                alert("Enter username");
                return false;
            }
            if (password === "") {
                alert("Enter password");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
