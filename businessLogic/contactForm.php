<?php 
session_start();

if (isset($_POST['emri'])){

    if(empty($_POST['name']) || (empty($_POST['subject']) || (empty($_POST['phone']) || (empty($_POST['email']) 
    || (empty($_POST['msg'])) {
        $_SESSION['res']= "Te gjitha fushat jane te zbrazeta ";
        header("Location: contact.php");
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $_SESSION['res']="Shenoni email-in valid";
    header("Location: contact.php");
} else if(strlen($_POST['msg']) <=140 ) {
    $_SESSION['res']= "Mesazhi duhet te jete me i gjate se 140 karaktere";
    header("Location: contact.php");
} else{

    //konektimi me databaze
    $conn = mysqli_connect("localhost", "root", "", "formdb");
    $name=$_POST['name'];
    $name=$_POST['subject'];
    $name=$_POST['email'];
    $name=$_POST['msg'];
    $is_done = $conn->query("INSERT INTO `contact_us`(`name`, `subject`, `email`,`msg`) VALUES('$name', '$subject', '$email', '$msg')");
    if ($is_done == TRUE){
        $_SESSION['res']="Faleminderit qe na kontaktuat!";
        header ("Location: contact.php");
    }
}



}