<?php  include"includes/header.php" ?>

<?php  include"includes/navigation.php" ?>

  <div id="wrapper">

    <!-- Sidebar -->
    <?php  include"includes/sidebar.php" ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <?php
        $_SESSION['first_name']=NULL;
        $_SESSION['last_name']=NULL;
        $_SESSION['mobile_stud']=NULL;
        $_SESSION['room_no']=NULL;
        $_SESSION['email_stud']=NULL;
        $_SESSION['password_one']=NULL;
        ?>
      
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php  include"includes/footer.php" ?>