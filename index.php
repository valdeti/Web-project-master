<?php 
?>
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Chess Game-Kryefaqja</title>
 <link rel="stylesheet" href="css/style.css">
 
</head>
<body>
<?php 
   include 'komponentet/header.php';
?>

     <main class="main-content">
       <sector class="sector1">
        <h2 class="titulli">Lëviz gjithmonë në heshtje.<br>
        Fol vetëm kur të vijë koha të thuash SHAH-MAT.</br></h2>
        <img src="img/shahu5.jpeg" alt="" class="foto">
     
            <div class="container">
             
                <div class="link-container">
                  <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
                  <a href="#" onclick="changeForm(1)">Register</a>
                </div>
                <form id="mainForm" action="businessLogic/loginVerify.php" method="post" onsubmit="return validate()">
                  <div class="login forms form-style">
                    <label for="">Username:</label>
                    <input type="text" name='username' class="input" placeholder="username..." />
                    <label for="">Password:</label>
                    <input type="password" name='password' class="input" placeholder="password..." />
                    <input id="submit" type="submit" name='login-btn' class="input submit" value="Login" />
                  </div>
                </form>
                            </div>
            </sector>
            </main>

            <?php
    include  'komponentet/footer.php';
    ?>