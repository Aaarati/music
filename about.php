
  <section main="main_heading my-5" id="about"> 
    <?php
    include('./admin/config.php');
    $query="SELECT * FROM about ORDER BY id desc LIMIT 1 ";
    
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
<div class=" text-center "> 
     <h1 class="display-4 mt-5" >About us</h1>
       <hr class="w-25 mx-auto" />
</div>
<div class="container ">
  <div class="row my-5 ">
    <div class="col-lg-6 col-md-6 col-12 col-xxl-6 w-50">
       <?php echo '<img src="./admin/uploads/'. $row["file"].'" alt="piano" height="100%" width="90%" >'; ?>

    </div>

 
  <div class="col-lg-6 col-md-6 col-12 col-xxl-6  ">
    <h3>Our Books</h3> 
    <p>
          <?php echo $row["description"]; ?>
    </p>

    <button type="button" class="btn btn-info"data-bs-toggle="tooltip" data-bs-placement="right" title=" Tooltip on right" >Check more</button>
  </div>

  </div>
</div>
<?php 
    }
    }               
    ?>

</section>




 <!-- <section main="main_heading my-5" id="about">  
    <div class=" text-center "> 
     <h1 class="display-4 mt-5" >About us</h1>
       <hr class="w-25 mx-auto" />
</div>
<div class="container ">
  <div class="row my-5 ">
    <div class="col-lg-6 col-md-6 col-12 col-xxl-6 w-50">
      <figure class> 
        <img src="image/1.jpg" alt="about image" class="img-fluid about_img" >
      </figure>
    </div>

 
  <div class="col-lg-6 col-md-6 col-12 col-xxl-6  ">
    <h3>Our Books</h3> 
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <button type="button" class="btn btn-info"data-bs-toggle="tooltip" data-bs-placement="right" title=" Tooltip on right" >Check more</button>
  </div>
  </div>
  
</div>

</section>-->
