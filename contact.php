<?php
include_once("admin/config.php");
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
        $sql = "INSERT INTO  contact(name,email,message) Values('$name','$email','$message')";
    $result= mysqli_query($conn,$sql);
    if($result){
        header("Location: index.php");
    }
    
    
}

?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method= "POST">
            <label>full name</label><br />
            <input type="text" name="name"  required/><br />
            <label>Email</label><br />
            <input type="email" name="email"  required/><br />
            <label>message</label><br />
            <textarea name="message" required></textarea><br />
            <input type="submit" name="submit" value="send" />
</form>