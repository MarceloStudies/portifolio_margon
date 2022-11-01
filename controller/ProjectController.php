<?php

// Includes
include '../includes/config.php';

// Get the id from the URL
$action = $_GET['action'];
$method = $_SERVER['REQUEST_METHOD'];


if ($action == "salvar") {

    // Vars

  //*Upload Images
    $img1 = $_FILES['img1'];
    $img2 = $_FILES['img2'];
    $img3 = $_FILES['img3'];

    if (isset($img1) && $img1['error'] == 0 && isset($img2) && $img2['error'] == 0 && isset($img3) && $img3['error'] == 0) {

        $ext1 = explode('image/', $_FILES['img1']['type']);
        $imgName1 = "image" . time() . "." . $ext1[1];
        $dir1 = '../assets/img/projects/' . $imgName1;

        $ext2 = explode('image/', $_FILES['img2']['type']);
        $imgName2 = "image" . time() . "." . $ext2[1];
        $dir2 = '../assets/img/projects/' . $imgName2;

        $ext3 = explode('image/', $_FILES['img3']['type']);
        $imgName3 = "image" . time() . "." . $ext3[1];
        $dir3 = '../assets/img/projects/' . $imgName3;

        move_uploaded_file($_FILES['img1']['tmp_name'], $dir1);
        move_uploaded_file($_FILES['img2']['tmp_name'], $dir2);
        move_uploaded_file($_FILES['img3']['tmp_name'], $dir3);


    }

    //*Get the data from the form
    $name = $_POST['name'];
    $link = $_POST['link'];
    $resume = $_POST['resume'];
    $description = $_POST['description'];

    //*Insert the data into the database
    try{
        $stmt = $conn->prepare("INSERT INTO projects (`titulo`,`link`,`resumo`,`descricao`,`img1`,`img2`,`img3`) VALUES (?,?,?,?,?,?,?);");

        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $link);
        $stmt->bindParam(3, $resume);
        $stmt->bindParam(4, $description);
        $stmt->bindParam(5, $dir1);
        $stmt->bindParam(6, $dir2);
        $stmt->bindParam(7, $dir3);

        if($stmt->execute()){
            header("Location: ../app/projects.php");
        }else{
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }

    }catch(PDOException $erro){
        echo "Erro: " . $erro->getMessage();
    }

}