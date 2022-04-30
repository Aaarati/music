<?php
include_once("config.php");
if(isset($_POST['submit'])){

    $username= $_POST['uname'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM login
            where uname='$username' AND password= '$password' ";
    $result= mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['uname'] = $username;
        
        // echo "connected";
        header("Location: dashboard.php");
        
    }else{
        echo "login failed";
    }


}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Music School</title>
    <link rel="stylesheet" type="text/css" href="../styles.css" />
  </head>
  <body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<div class="adjust">
<div class="wrapper">
    <div class="title">
        Login Form
    </div>
    <div class="form">
        <div class="inputfield">
            <label>Username</label>
            <input type="text" class="input" name="uname" required>
        </div>  
        <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input" name="password">
        </div>  
        <div class="inputfield">
            <label><a href="register.php">Register</a></label>
        </div> 
        
        <div class="inputfield">
        <input type="submit" value="Submit"  name="submit" class="btn">
        </div>
    </div>
</div>
</div>

</form>
</body>
</html>
