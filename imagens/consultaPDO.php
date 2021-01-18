<?php

$connection = new PDO("myqli:projeto2=hcode-pdo;host=127.0.0.1", "root", "");

$statemet = $connection->prepare("INSERT INTO usuários(nome, email) VALUES (:usernome, :useremail)");

$nome = "Wanessa Barros";
$email = "wanessasbarros16@gmail.com"

$statemet->bindParam(':usernome', $nome);
$statemet->bindParam(':useremail', $email);

$statemet->execute();

echo("dados inseridos");
?>