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
<nav class ="navbar">
    <div class="navbar_container">
    <img  src ="img/logoochess.jpg" class="logo"/>
   
    <ul class="navbar__menu">
      <li class="navbar__item">
     <a href="index.php" class="navbar__links">Kryefaqja</a>
      </li>
      <li class="navbar__item">
        <a href="strategjite.php" class="navbar__links">Strategjite</a>
         </li>
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

    </ul>
    </div>
    </nav>

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
                <form id="mainForm" action="">
                  <div class="login forms form-style">
                    <label for="">Username:</label>
                    <input type="text" id='username' class="input login-element" placeholder="username..." />
                    <label for="">Password:</label>
                    <input type="password" class="input login-element" placeholder="password..." />
                    <input id="submit" type="button" class="input submit" value="Login" onclick="validate('login')" />
                  </div>
                  <div class="register forms hidden">
                    <label for="">Name:</label>
                    <input type="text" class="input register-element" placeholder="username..." />
                    <label for="">Lastname:</label>
                    <input type="text" class="input register-element" placeholder="lastname..." />
                    <label for="">Password:</label>
                    <input type="text" class="input register-element" placeholder="password..." />
                    <input id="submit" type="button" name='asdf' class="input submit" value="Login" onclick="validate('register')" />
                  </div>
                </form>
              </div>
            </sector>
            </main>

            <div class="footer">
    <i>&copy;2020</i>

    <h3>ChessGame🤍-Te gjitha te drejtat e rezervuara</h3>
        
  </div>
  <script src="script.js"></script>
  
</body>
</html>