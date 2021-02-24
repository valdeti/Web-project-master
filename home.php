<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">  
    <title>dashboard</title>
</head>
<body>
<?php
include 'komponentet/header.php';
include_once 'businessLogic/userMapper1.php';
$mapper =  new UserMapper1();
    $produktetList = $mapper->getAllUsers();

?>

<div>

    <div>
        <h2>Produktet</h2>
        <table>
            <thead>
                <tr class="asd">
                    <td class="qwe">id</td>
                    <td>emri produktit</td>
                    <td>pershkrimi</td>
                    <td>foto</td>

                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($produktetList as $produkteve) {
                ?>
                
                    <tr>
                        <td><?php echo $produkteve['idprodukti']; ?></td>
                        <td><?php echo $produkteve['emri']; ?></td>
                        <img src=img\<?php echo $produkteve['img']; ?>>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




<?php
include 'komponentet/footer.php'
?>