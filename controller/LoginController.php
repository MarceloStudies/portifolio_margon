<?php
include '../includes/config.php';

$action = $_GET['action'];
$method = $_SERVER['REQUEST_METHOD'];


if ($action == "logar" && $method == "POST") {

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    try{
       

        //preventions against sql injection
        $login = addslashes($login);
        $senha = addslashes($senha);
        $login = htmlspecialchars($login);
        $senha = htmlspecialchars($senha);


        $senha = md5($senha);
        $sql = "SELECT * FROM users WHERE username = '$login' AND `password` = '$senha'";
        $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        $count = $result->rowCount();
        if ($count == 1){
            $_SESSION['login'] = $row['login'];
            $_SESSION['senha'] = $row['senha'];
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['id'] = $row['id'];
            header("Location: ../app/home.php");
        }else{
            echo "<script>alert('Usuário ou senha inválidos');</script>";
            echo "<script>window.location.href = '../app/login.php';</script>";
        }

    }catch (PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
}

?>