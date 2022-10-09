<?php

include '../includes/config.php';

$action = $_GET['action'];
$method = $_SERVER['REQUEST_METHOD'];


if ($action == "salvar" && $method == "POST"){
    //User information
    $id             = $_POST['id'];
    $username       = $_POST['username'];
    $name           = $_POST['name'];
    $email          = $_POST['email'];
    $password       = $_POST['password'];

    //Contact information
    $city           = $_POST['city'];
    $state          = $_POST['state'];
    $country        = $_POST['country'];
    $cep            = $_POST['cep'];
    $birthday       = $_POST['birthday'];
    $phone          = $_POST['phone'];

    //Social media information
    $facebook       = $_POST['facebook'];
    $youtube        = $_POST['youtube'];
    $instagram      = $_POST['instagram'];
    $linkedin       = $_POST['linkedin'];
    $github         = $_POST['github'];

    //About me information
    $title          = $_POST['title'];
    $description    = $_POST['description'];
    $phrase         = $_POST['phrase'];
    $degree         = $_POST['degree'];
    $slcFreelance   = $_POST['slcFreelance'];

    //Developer information
    $quant_Certificate  = $_POST['quant_Certificate'];
    $quant_Project      = $_POST['quant_Project'];
    $quant_Video        = $_POST['quant_Video'];







    
}


?>