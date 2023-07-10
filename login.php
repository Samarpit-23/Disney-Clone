<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style2.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <div class="left-container">
        <h1>Login</h1>
       
      </div>
      <div class="right-container">
        <form method="POST">
          <div class="loginform">
          <input type="text" placeholder="Enter user name" name="name"  />
            <input type="password" placeholder="password" name="password" id="" />
            <button type="submit" name="submit">login</button>
            <?php
if(isset($_POST['submit'])){
$link=mysqli_connect("localhost","root","","demo");
if($link===false){
die("Error : Could not connect ".mysqli_connect_error());
}
$name=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT * from disney where name='$name'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0){
while($row=mysqli_fetch_array($res)){

if($row['password']==$password){
$_SESSION['name']=$_POST['name'];
$_SESSION['password']=$_POST['password'];
echo "<h2>Login Successfully</h2>";
header('Location: welcome.php');
}
else{
echo "<h1>Password mismatch</h1>";
}
}
}
else{
header('Location: register.php');
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
</script>
  </body>
</html>




