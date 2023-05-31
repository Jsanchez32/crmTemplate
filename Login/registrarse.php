<?php


    if(isset($_POST['registrarse'])){
        require_once("registroUser.php");
        
        $register= new User();
        
        $register->setIdCamper(18);
        $register->setEmail($_POST['email']);
        $register->setUsername($_POST['username']);
        $register->setPassword($_POST['password']);
        

        if($register->checkUser($_POST['email'])){
            echo"<script> alert('El email ya exite'); document.location='loginRegister.php'</script>";

        }
        else{
            $register->insertData();
             echo"<script> alert('Los datos fueron registrados satisfactoriamente'); document.location='../Home/home.php'</script>";
  
        }
    };


?>


