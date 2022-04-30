<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <h2>Enrollment form</h2>
            <label>Fullname</label><br />
            <input type="text" name="user" /> <br />
            <label> Email</label><br />
            <input type="email" name="email" /><br />
            <label> Address</label><br />
            <input type="text" name="address" /><br />
            <label> Phone number</label><br />
            <input type="number" name="phone" /><br />
            <label> Gender</label><br />
            <input type="radio" name="gender" value="male" />male
            <input type="radio" name="gender" value="female" />female
            <br />
            <label> Course</label><br />
            <select name="courses">
              <option value="#">Select a Course</option>
              <option value="piano">piano</option>
              <option value="guitar">guitar</option></select
            ><br />
            <label> Duration</label><br />
            <select name="duration">
              <option value="#">Select a duration</option>
              <option value="1month">1 month</option>
              <option value="3months">3 months</option>
              <option value="6months">6 months</option></select
            ><br />

            <input type="submit" name="coursesubmit" value="submit" />

            <img
              src="icons/cancel.svg"
              alt="close"
              id="close"
              onclick="closecourse()"
            />
          </form>
</form>