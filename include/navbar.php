<?php
    $user = getuser();
    ?>



<div class="navbar navbar-expand-lg navbar-dark bg-primary py-1 ">
    <div class="container">
        <a href="" class="navbar-brand">Gmail</a>

       <div class="col-5">
       <form action="" method="post" class=" input-group">
            <input type="search" name="search" class="form-control">
            <input type="submit" name="find" value="Go" class="btn btn-dark">
</form>
       </div>
        <ul class="navbar-nav">
            <li  class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <?php
            if(isset($_SESSION['user'])){
                ?>
            <li  class="nav-item"><a href="" class="nav-link"><?= $user['fname'];?></a></li>
            <li  class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
            <?php }else { ?>
                <li  class="nav-item"><a href="create_account.php" class="nav-link">Register</a></li>
            <li  class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
           
            <?php } ?>
</ul>
    </div>
</div>