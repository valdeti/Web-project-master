<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>dashboard</title>
</head>
<body>
 <?php 
   include 'komponentet/header.php';
?>
  <main>
  <?php
include_once 'businessLogic/variables.php';
<<<<<<< HEAD
include_once 'businessLogic/userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
} else {
    header("Location: index.php");
}



=======
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $userList = VariablesExample::getUsers();
} else {
    header("Location:index.php");
}


>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
?>

<div>
    <h1>This is Dashboard page</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Username</td>
                    <td>Mosha</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
<<<<<<< HEAD
                        <td><?php echo $user['userName']; ?></td>
                        <td><?php echo $user['userLastName']; ?></td>
                        <td><?php echo $user['userEmail']; ?></td>
                        <td><a href=<?php echo "../businessLogic/detailsUser.php?id=" . $user['UserID']; //to be continued by students
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "../edit.php?id=" . $user['UserID'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "../businessLogic/deleteUser.php?id=" . $user['UserID'];
=======
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['age']; ?></td>
                        <td><a href=<?php echo "businessLogic/detailsUser.php?id=" . $user['id']; //to be continued next week 
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "businessLogic/modifyUser.php?id=" . $user['id']; //to be continued next week 
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "businessLogic/deleteUser.php?id=" . $user['id']; //to be continued next week 
>>>>>>> f29da3abc79fee9e3018568a6d187ccc945717c8
                                    ?>>Fshij</td>
                    </tr>
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

  </main>
        
        </body>
        </html>