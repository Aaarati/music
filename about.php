<section class="about" id="about">
<?php
    include('admin/config.php');
    $query="SELECT * FROM about ORDER BY id desc LIMIT 1 ";
    
    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
        <div class="about_us">
          <h2>about us</h2>
          <p>
          <?php echo $row["description"]; ?>
          </p>
          <a href="#">Read more</a>
        </div>
        <div class="about_image">
          <?php echo '<img src="admin/uploads/'. $row["file"].'" alt="piano" >'; ?>

        </div>
        <?php 
    }
    }               
    ?>
      </section>