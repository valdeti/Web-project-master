<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Chess Game-Produktet</title>
    <link rel="stylesheet" href="css/styleproduktet.css">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>
<body>  
<?php 


 
include 'komponentet/header.php';
include_once 'businessLogic/userMapper1.php';
$mapper =  new UserMapper1();
    $produktetList = $mapper->getAllProducts();

?>
    <main class ="main-content">

        <div class = "products">
            <div class = "container">
                <div class = "product-items">
                    <!-- nje produkt -->
                    <?php    foreach ($produktetList as $produkteve) {
                ?>
                
              


                    <div class = "product">
                        <div class = "product-content">
                            <div class = "product-img">
                                <img src = "img/<?php echo $produkteve['img']; ?>" alt = "guret1">
                            </div>
                            <div class = "product-btns">
                                <button type = "button" class = "btn-cart"> Shto ne shporte
                                    <span><i class = "fas fa-plus"></i></span>
                                </button>
                                <button type = "button" class = "btn-buy"> Blej tani
                                    <span><i class = "fas fa-shopping-cart"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class = "product-info">
                            <div class = "product-info-top">
                                <!-- <h2 class = "sm-title">Produkte</h2> -->
                                <div class = "rating">
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "fas fa-star"></i></span>
                                    <span><i class = "far fa-star"></i></span>
                                </div>
                            </div>
                            <a href ="#" style="color: #fff; font-size: 25px; text-decoration: none;"><?php echo $produkteve['emri']; ?></a>

                            
                            <p style="color: #fff;">150.00 €</p>
                            
                    </div>
                    <?php if($produkteve['sale']) {?>
                        <div class = "off-info">
                            <h2 class = "sm-title"><?php echo $produkteve['sale']; ?>% off</h2>
                        </div>
                   
                    

                <?php
                }
                ?>
 </div>
<?php
                } ?>
                    
                    <!-- end of single product -->
                    <!-- single product -->
                 
                </div>
            </div>
        </div>
 
    </main>
    <?php
    include  'komponentet/footer.php';
    ?>