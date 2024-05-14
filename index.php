<?php include('includes/header.php')  ?>

    <?php
         if (isset($_GET['message'])) {
            echo "<h4>".$_GET['message']."</h4>";
         }
    ?>
   
    <form action="includes/login_process.php" class="form" method="post">
        <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" name="uname" class="form-control">
        </div>
        <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">  
        <input type="submit" value="Login" name="login" class="btn btn-success mt-3">
        </div>
    </form>


    <?php include('includes/footer.php')  ?>