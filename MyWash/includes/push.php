<?php

    include_once 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $vorname = htmlspecialchars($_POST["vorname"]);
        $nachname = htmlspecialchars($_POST["nachname"]);
        $wohnung = htmlspecialchars($_POST["wohnung"]);
    
        if (empty($vorname)) {
            exit();
        }
    
        if (empty($nachname)) {
            exit();
        }
    
        if (empty($wohnung)) {
            exit();
        }
    
        $sql = "INSERT INTO users (vorname, nachname, wohnung) 
        VALUES ('$vorname', '$nachname', '$wohnung');";
        mysqli_query($conn, $sql);
    
        header("Location: ../index.php?push=success");
    
    
    } else {
        header("Location: ../index.php");
    }