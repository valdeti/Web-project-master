<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/lojtaret.css">
    <title>Lojtaret</title>
</head>
<body>
 <?php 
   include 'komponentet/header.php';
?>
  <main>
        <div class="slider">
          <div class="slider-content active">
            
            <img class="magnus1" src="img/Magnus.jpg" alt=""/>
            <h1>Magnus Carlsen</h1>
            <h2>
              Sven Magnus Øen Carlsen i lindur më 30 nëntor 1990) është një "super grandmaster " norvegjez i shahut i cili është kampion aktual botëror i shahut, 
              kampion botëror i shahut ne kategorine blitz dhe kampion botëror i shahut ne classic.</h2>
          </div>
          <div class="slider-content not-active" class="">
            <img class="fabiano1" src="img/fabiano.jpg" alt=""/>
            <h1>Fabiano Caruana</h1>
            <h2>
              Fabiano Luigi Caruana (lindur më 30 korrik 1992) është një lojtar shahu amerikano-italian.
               Një mrekulli shahu, ai u bë një "grandmaster" në moshën 14 vjeç, 11 muaj dhe 20 ditë - 
              Grandmasteri më i ri në historinë e Italisë dhe Shteteve të Bashkuara në atë kohë.</h2>
          </div>
          <div class="slider-content not-active">
            <img class="hikaru1" src="img/hikaru.jpg" alt=""/>
            <h1>Hikaru Nakamura</h1>
            <h2>Hikaru është një legjende e shaut modern. Ai ka fituar shumë tituj nacional dhe nderkombetar.
              Hikaru Nakamura (lindur më 9 dhjetor 1987) është një lojtar amerikan shahu. 
              Një çudi e shahut, ai u bë amerikani më i ri për të fituar titullin Grandmaster i moshës 15 vjeç dhe 79 ditë. </h2>
          </div>
          
        </div>
        <script src="script.js"></script>
  </main>
        
</body>
</html>