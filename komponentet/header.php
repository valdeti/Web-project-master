<?php
session_start();
?>
<nav class ="navbar">
        <div class="navbar_container">
        <img  src ="img/logoochess.jpg" class="logo"/>
       
        <ul class="navbar__menu">
          <li class="navbar__item">
         <a href="index.php" class="navbar__links">Kryefaqja</a>
          </li>
          <li class="navbar__item">
          <?php
          if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
          ?>
            <a href="dashboard.php" class="navbar__links">Dashboard</a>
             </li>
             <?php
            }
          ?>

          <li class="navbar__item">
          <?php
          if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
          ?>
            <a href="strategjite.php" class="navbar__links">Strategjite</a>
             </li>
             <?php
            }
          ?>

            <li class="navbar__item">
          <?php
          if (isset($_SESSION["role"]) && $_SESSION['role'] == '0') {
          ?>
            <a href="strategjite.php" class="navbar__links">Strategjite</a>
             </li>
             <?php
            }
          ?>

          <!--Produktet-->
          <li class="navbar__item">
          <?php
          if (isset($_SESSION["role"]) && $_SESSION['role'] == '0') {
          ?>
            <a href="produktet.php" class="navbar__links">Produktet</a>
             </li>
             <?php
            }
          ?>

           <?php
          if (isset($_SESSION["role"])) {
          ?>
          <li class="navbar__item">
            <a href="businessLogic/logout.php" class="navbar__links">Logout</a>
             </li>
             <?php
            }
            ?>
             
          
             <li class="navbar__item">
                <a href="meso.php" class="navbar__links">Meso figurat</a>
                 </li>
                 <li class="navbar__item">
                <a href="produktet.php" class="navbar__links">Produktet</a>
                </li>
                <li class="navbar__item">
                <a href="historiku.php" class="navbar__links">Historiku</a>
                </li>
                <li class="navbar__item">
                    <a href="lojtaret.php" class="navbar__links">Lojtaret</a>
                    </li>
                    <li class="navbar__item">
                    <a href="contact.php" class="navbar__links">Kontakti</a>
                    </li>
    
        </ul>
        </div>
        </nav>