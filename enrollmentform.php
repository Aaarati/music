
<?php
include_once("admin/config.php");
if(isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $courses = $_POST['courses'];
    $duration = $_POST['duration'];
    $payment= $_POST['payment'];

    
        $sql = "INSERT INTO  enroll(fullname,email,address,phone,gender,courses,duration,payment)
        Values('$name','$email','$address','$phone','$gender','$courses','$duration','$payment')";
    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location: index.php");
    }else{
        // echo"data not inserted".mysqli_error($conn);
    }
    
    
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  </head>
<body>

<div class="wrapper">
    <div class="title">
      Enrollment Form
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >

    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="fullname" required>
       </div>  
         
       <div class="inputfield">
          <label>Email</label>
          <input type="email" class="input" name="email" required>
       </div>  
       <div class="inputfield">
          <label>Address</label>
          <input type="text" class="input" name="address" required>
       </div>  
       <div class="inputfield">
          <label>Phone</label>
          <input type="number" class="input" name="phone" required>
       </div>  
       
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option value="">Select</option>
              <option  value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Courses</label>
          <div class="custom_select">
            <select name="courses">
              <option value="">Select</option>
              <option value="piano">Piano</option>
              <option value="guitar">Guitar</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Duration</label>
          <div class="custom_select">
            <select name="duration">
              <option value="">Select</option>
              <option value="1">1 Month</option>
              <option value="2">2 Month</option>
              <option value="3">3 Month</option>
            </select>
          </div>
      </div> 
        <div class="inputfield">
          <label>Payment Process</label>
          <div class="custom_select">
            <select name="payment">
              <option value="">Select</option>
              <option value="Cash In Hand">Cash In Hand</option>
              <option value="Online Payment">Online</option>
            </select>
          </div>
      </div> 

      <div class="inputfield">
        <input type="submit" value="Submit"  name="submit" class="btn">
        </div>
    </div>
</div>
</form>

</body>
</html>

