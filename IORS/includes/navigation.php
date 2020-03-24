
<nav class="navbar navbar-expand navbar-dark bg-danger static-top">

    <a class="navbar-brand mr-1" href="../index.php">IORS</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
   

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-6">
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
          <!-- <small>"<?php //echo  $_SESSION['first_name']; ?>"</small>  -->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" >Settings</a>
          <a class="dropdown-item" >Activity Log</a>
          <div class="dropdown-divider"></div>
          <form method='post'>
          <input type="submit" class="dropdown-item" name="logout" data-toggle="modal" value="Logout">
          </form>
          <?php
          if(isset($_POST['logout']))
          {
            $_SESSION['first_name']=null;
            $_SESSION['last_name']=null;
            $_SESSION['mobile_stud']=null;
            $_SESSION['room_no']=null;
            $_SESSION['email_stud']=null;
            $_SESSION['password_one']=null;
            header("Location:index.php");
          }
          ?>
        </div>
      </li>
    </ul>

  </nav>