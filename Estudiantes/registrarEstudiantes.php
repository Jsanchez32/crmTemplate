<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

    if(isset($_POST['guardar'])){
        require_once('camper.php');

        $camper = new Camper();
        $camper->setNombres($_POST['nombres']);
        $camper->setDireccion($_POST['direccion']);
        $camper->setLogros($_POST['logros']);
        $camper->setSkills($_POST['skills']);
        $camper->setIngles($_POST['ingles']);
        $camper->setSer($_POST['ser']);
        $camper->setReview($_POST['review']);
        $camper->setEspecialidad($_POST['especialidad']);
        $camper->insertData();


        echo"<script> alert('Los datos fueron guardados satisfactoriamente'); document.location='estudiantes.php'</script>";
    }







?>