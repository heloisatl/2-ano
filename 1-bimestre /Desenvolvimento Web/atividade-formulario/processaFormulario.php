<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (empty($nome) || empty($email)) {
        echo "Todos os campos são obrigatórios!";
    } else {
        header("Location: obrigado.php");
        exit(); 
    }
}

