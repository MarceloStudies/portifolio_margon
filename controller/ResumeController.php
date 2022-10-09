<?php

// Includes
include '../includes/config.php';

// Get the id from the URL
$action = $_GET['action'];
$method = $_SERVER['REQUEST_METHOD'];


if ($action == "salvar") {

    // Vars

    $nameschool         = $_POST['nameschool'];
    $adress             = $_POST['adress'];
    $description        = $_POST['description'];
    $date               = $_POST['date'];

    $countClass         = $_POST['countClass'];






    if ($countClass > 0) {
        for ($k = 0; $k < $countClass; $k++) {
            $nschool    = $nameschool[$k];
            $ad         = $adress[$k];
            $desc       = $description[$k];
            $data       = $date[$k];

            try {
                $stmt = $conn->prepare("INSERT INTO education (`name`,locale,`description`,since) VALUES (?,?,?,?);");

                $stmt->bindParam(1, $nschool);
                $stmt->bindParam(2, $ad);
                $stmt->bindParam(3, $desc);
                $stmt->bindParam(4, $data);



                if ($stmt->execute()) {
                    header("Location: ../app/resume.php");
                } else {
                    throw new PDOException("Erro: Não foi possível executar a declaração sql");
                }
            } catch (PDOException $erro) {
                echo "Erro: " . $erro->getMessage();
            }
        }
        var_dump($countClass);
    } else {
        try {
            $stmt = $conn->prepare("INSERT INTO education (`name`,locale,`description`,since) VALUES (?,?,?,?);");

            $stmt->bindParam(1, $nameschool);
            $stmt->bindParam(2, $adress);
            $stmt->bindParam(3, $description);
            $stmt->bindParam(4, $date);

            if ($stmt->execute()) {
                header("Location: ../app/resume.php");
            } else {
                throw new PDOException("Erro: Não foi possível executar a declaração sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}
if ($action == "salvar2") {

    // Vars

    $idArea             = $_POST['slcExperience'];
    $description        = $_POST['descriptions'];
    $countClass         = $_POST['countClass'];

    echo $countClass;

    var_dump($description);


    for ($k = 0; $k < $countClass; $k++) {

        $descriptions       = $description[$k];
        echo $descriptions;
        die();


        try {
            $stmt = $conn->prepare("INSERT INTO task_professional_experience (`id_professional_experience`,`description`) VALUES (?,?);");

            $stmt->bindParam(1, $idArea);
            $stmt->bindParam(2, $descriptions);


            if ($stmt->execute()) {
                header("Location: ../app/resume.php");
            } else {
                throw new PDOException("Erro: Não foi possível executar a declaração sql");
            }
        } catch (PDOException $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}

if ($action == "salvarArea") {


    $name = $_REQUEST['name'];
    $data_process = $_REQUEST['data_process'];
    $locale = $_REQUEST['locale'];



    try {
        $stmt = $conn->prepare("INSERT INTO professional_experience (`name`,date_process,locale) VALUES (?,?,?);");

        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $data_process);
        $stmt->bindParam(3, $locale);

        if ($stmt->execute()) {
        } else {
            throw new PDOException("Erro: Não foi possível executar a declaração sql");
        }
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
}
