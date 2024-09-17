<?php

require "db.php";
$admininform = "SELECT * FROM upd";
$result = $conn->query($admininform);


if (isset($_POST['name']) && isset($_POST['password']) && isset($_FILES['img']) ) {
    
    $name = $_POST['name'];
    $password = $_POST['password'];
    $img_temp = $_FILES['img']['tmp_name'];
    $img_name = $_FILES['img']['name']; 
   

    move_uploaded_file($img_temp, "./image/" . $img_name);
    $upd = mysqli_query($conn,"UPDATE upd SET name='$name', password='$password', img='$img_name'");
}


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  width: 300px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  margin-top: 100px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-bottom: 20px;
}

button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
 image
 {
  width: 18rem;
}
  </style>
  <body>
    <div class="container">
      <h1>Login</h1>
      <form action="./" method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" id="username" name="name" >
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        <input type="file" id="image" name="img" > 
        <br><br><br>  
           <button type="submit">Login</button>
      </form>
     
    </div>
    <h1><?php echo $name?></h1>
      <h1><?php echo $password?></h1>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="./image/<?php echo $img_name?>" alt="">
  </body>
</html>




