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
        
       
        header("Location: dashboard.php");
        
    }else{
        echo "login failed";
    }


}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>login</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container login-container">
      <div class="row w-50">
        <div
          class="col-sm-12 d-flex justify-content-center flex-column shadow-lg rounded-2"
        >
          <form action="" class="p-4" method="POST">
            <h1 class="h4">Login</h1>
            <hr />

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Username</label
              >
              <input
                type="text"
                name="uname"
                class="form-control"
                id="exampleFormControlInput1"
               required
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Password</label
              >
              
              <input
                type="password"
                name="password"
                class="form-control"
                id="exampleFormControlInput1"
               
              />
            </div>
            <input type="submit" name="submit" class="buttons mb-3" value="submit">
            <!-- <button type="submit" class="buttons mb-3">Submit</button> -->

            <p class="text-center fw-bold">
              Don't Have An Account?
              <a href="register.php" class="text-decoration-none form-links"
                >Register now</a
              >
            </p>
          </form>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
