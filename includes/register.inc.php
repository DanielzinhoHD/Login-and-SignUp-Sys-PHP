<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputsRegister($name, $email, $password, $password2) !== false){
        header("location: ../register.php?error=missinginput");
        exit();
    }

    if(pwdMatch($password, $password2) !== false){
        header("location: ../register.php?error=differentpasswords");
        exit();
    }

    if(invalidEmail($email) !== false){
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    if(existingEmail($conn, $email) !== false){
        header("location: ../register.php?error=emailtaken");
        exit();
    }

    if(createUser($conn, $name, $email, $password, $password2) !== false){
        header("location: ../register.php?error=failedtocreateaccount");
        exit();
    }

} else {
    header("location: ../register.php");
    exit();
}