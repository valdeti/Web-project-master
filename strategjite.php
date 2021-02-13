<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Chess Game-Strategjite</title>
    <link rel="stylesheet" href="css/stylestrategjite.css">
</head>
<body>

<?php 
   include 'komponentet/header.php';
?>
    <main class=main-content>
        <sector class="sector1">
            <div class="container">
                <div class="sector1__text">
                    <h2>Strategjite</h2>
                    <h4>Me poshte mund te gjeni strategji te ndryshme per hapjet ne shah </h4>
                    <p>Mesimi dhe pervetesimi i strategjive ne shah eshte nje pjese kruciale e lojes,
                        pasi qe kjo mund te determinoj te gjithe rrjedhen e lojes.  </p> 
                     <p>   Shume lojtare te shahut neper bote e veqanerisht
                        lojetaret e klasit boteror i dijne keto hapje permendesh, pasi qe perpos qe i kane mesuar duke luajtur
                        ata gjithashtu i kane mesuar ato edhe duke lexuar teorine dhe e kane pervetesuar ate. </p>
                      <p>  Me poshte jane listuar
                        disa prej hapjeve me te famshme dhe me se shpeshti te perdorura ne shah.
                       </p>
                </div>
                    <div class="sector1__image">
                    <img src="img/shahu.jpg" alt="">
                    </div>
                </div>
                             
            </sector>
        

            <sector class="sector2">
                <div class="container">
                    <div class="sector2__text">
                        <h3>Italian Game</h3>
                        <p>
                            E zhvilluar për herë të parë në vitet 1600 dhe ndoshta hapja më e vjetër ne lojen e shahut, hapja italiane e quajtur gjithashtu piano giuoco, "loja e qetë" në italisht, arrihet me lëvizjet: 1. e4, e5; 2. Nf3, Nc6; dhe 3. BC4.
                            Ishte e famshme gjatë viteve te 1800-ta, por sot është zëvendësuar nga Ruy Lopez si zgjedhja e preferuar nga te bardhat per lëvizjen e tretë. 
                         <p>
                        Në këtë hapje, Bc4 shikon pengun potencialisht të dobët të f7, por me kalimin e viteve, gjate studimit te ndeshjeve te lojtareve te klasit boteror eshte pare se  kjo është më pak e rrezikshme për të zezën sesa Bb5.
                             Akoma, loja italiane shpesh çon në pozicione agresive, të hapura, të cilat mund të jenë mjaft interesante për tu luajtur.</p> <p>Kjo hapje perdoret shume dhe është mjaft e popullarizuar në mesin e lojtarëve të botes.
                            Variantet në lojën italiane përfshijnë mbrojtjen e dy kalorësve dhe mbrojtjen hungareze.
                        </p>
                    </div>
                    <div class="sector2__image">
                        <img src="img/italian-game.jpeg" alt=""/>
                    </div>
                </div>
            </sector>
            
            <sector class="sector3">
                <div class="container">
                    <div class="sector3__image">
                        <img src="img/sicilian-defense.jpeg" alt=""/>
                    </div>
                    <div class="sector3__text">
                        <h3>Mbrojtja Siciliane</h3>
                        <p >
                            
                            Mbrojtja siciliane (1. e4, c5) është përgjigjja më e popullarizuar ndaj e4,
                            sidomos tek lojtaret e klasit boteror.</p> <p> Duke luajtur c5, lojtari kundershtar lufton menjëherë për qendrën dhe sulmon d4 por shmang simetrinë e5.
                            Mbrojtja siciliane zakonisht çon në një loje komplekse dhe të rrezikshme ku të dy palët mund të luajnë për një fitore te mundshme.</p>
                            <p>Ka variante te ndryshme per sicilianen,
                            te cilat te qojne ne lloje të ndryshme pozicionesh, ato janë varianti i mbyllur sicilian,dragoi,sicilian klasik,
                            dhe variacioni Najdorf.
                            
                        </p>
                        
                    </div>
                </div>
            </sector>
            <sector class="sector4">
                <div class="container">
                    <div class="sector4__image">
                        <img src="img/ruy-lopez.jpeg" alt=""/>
                    </div>
                    <div class="sector4__text">
                        <h3>Ruy lopez</h3>
                        <p>
                            Ruy lopez eshte nje hapje mjaft interesate. Eshte e veshtire te gjesh ndonje lojtar shahu i cili nuk e ka perdor te pakten nje here 
                            kete hapje. </p> <p> Kjo hapje e bene lojen mjat interesante dhe ka potencial te mjaftueshem per te dy lojtaret qe te formulojne ndonje sulm
                            te mundshem.</p>   <p>Kjo hapje mund te perdoret nga lojtaret e te gjitha niveleve. Hapja behet keshtu: 1. e4 e5: 2. Nf3 Nc6: 3. Bb5.
                            
                        </p>
                        
                    </div>
                </div>
            </sector>

      <!--
           
             <div class="strategjite-below">
                    <div class="img-box">
                        <img src="img/sicilian-defense.jpeg" alt=""/>
                    </div>
                    <div class="historia">
                        <h1>---Mbrojtja Siciliane</h1>
                        <h3 id='paragrafi'>
                            
                            Mbrojtja siciliane (1. e4, c5) është përgjigjja më e popullarizuar ndaj e4,
                            sidomos tek lojtaret e klasit boteror. Duke luajtur c5, lojtari kundershtar lufton menjëherë për qendrën dhe sulmon d4 por shmang simetrinë e5.
                            Mbrojtja siciliane zakonisht çon në një loje komplekse dhe të rrezikshme ku të dy palët mund të luajnë për një fitore te mundshme.
                            Ka variante te ndryshme per sicilianen,
                            te cilat te qojne ne lloje të ndryshme pozicionesh, ato janë varianti i mbyllur sicilian,dragoi,sicilian klasik,
                            dhe variacioni Najdorf.
                            
                        </h3>
                        
                    </div>
                </div>
                <div class="strategjite-below">
                    <div class="img-box">
                        <img src="img/ruy-lopez.jpeg" alt=""/>
                    </div>
                    <div class="historia">
                        <h1>---Ruy lopez</h1>
                        <h3 id='paragrafi'>
                            Ruy lopez eshte nje hapje mjaft interesate. Eshte e veshtire te gjesh ndonje lojtar shahu i cili nuk e ka perdor te pakten nje here 
                            kete hapje. Kjo hapje e bene lojen mjat interesante dhe ka potencial te mjaftueshem per te dy lojtaret qe te formulojne ndonje sulm
                            te mundshem. kjo hapje mund te perdoret nga lojtaret e te gjitha niveleve. Hapja behet keshtu: 1. e4 e5: 2. Nf3 Nc6: 3. Bb5.
                            
                        </h3>
                        
                    </div>
                </div>
            </div>
    
    -->
        

    </main>
    <?php
    include  'komponentet/footer.php';
    ?>