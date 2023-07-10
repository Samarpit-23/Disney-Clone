<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style2.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="left-container">
        <h1>Register</h1>
       
      </div>
      <div class="right-container">
        <form method="POST">
          <div class="loginform">
            <input type="text" placeholder="Enter user name" name="name"  />
            <input type="password" placeholder="password" name="password"  />
            <button type="submit" name="submit">Register</button>
          
          <?php
if(isset($_POST['submit'])){
$link=mysqli_connect("localhost","root","","demo");
if($link===false){
die("Error : Could not connect".mysqli_connect_error($link));
}

$name=$_POST['name'];
$password=$_POST['password'];

$sql="INSERT INTO disney VALUES('$name','$password')";
if(mysqli_query($link,$sql)){
echo "<h1>Registered Successfully</h1>";
}
else{

echo "<h1>Registration Failed</h1>";
}
mysqli_close($link);
}
?>
            <hr />
          </div>
        </form>
        
      </div>
    </div>
    <footer>
      <hr />
     
      <p>Disney © 2021</p>
</footer>
  </body>
</html>

