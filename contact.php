<?php 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/contact.css">
  <title>Kontakti</title>
</head>

<body>
<?php 
   include 'komponentet/header.php';
?>
  <div class="form-container">
    <form action="#" class="contact-form" method="post" action="contactForm.php">
      <div class="contact-form__header">
        <h1 class="contact-form__title">Na kontaktoni!</h1>
        <p class="contact-form__text">Ke nje pyetje? Ne do t'ju japim përgjigje të drejtpërdrejta!</p>
      </div>
  
      <div class="contact-form__body">
        <?php session_start(); ?>
        <?php if(isset($_SESSION['res'])): ?>
          <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['res']; ?>

          </div>
          <?php endif; ?>
          
        <div class="flex-container">
          <div class="column-half">
            <fieldset>
            
              <div class="input-group">
                <label for="name">Emri</label>
                <input type="text" id="name" maxlength="10" required placeholder="Ju lutem, vendosni emrin tuaj të plotë" required>
              </div>
              <div class="input-group">
                <label for="subject">Subjekti</label>
                <input type="text" id="subject" maxlength="10" required placeholder="Dua te ju kontaktoje sepse .." required>
              </div>
              
              <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" required placeholder="Ju lutemi, vendosni adresën tuaj të postës elektronike" required>
              </div>
            
              
            </fieldset>
          </div>
        
          <div class="column-half">
            <div class="input-group">
              <label for="msg">Mesazhi</label>
              <textarea id="msg" required placeholder="Ju lutem, përshkruani diçka në lidhje me projektin tuaj ..." required></textarea>
            </div>
          </div>
  
        </div>
      </div>
    
      <div class="contact-form__footer">
        <input type="submit" value="Dergo mesazhin">
      </div>
    </form>
  </div>
  <?php
    include  'komponentet/footer.php';
    ?>
</body>

</html>