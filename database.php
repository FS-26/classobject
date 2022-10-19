<?php
$username = "root";
$pass = "";
$host = "localhost";
$db = "testphp";
$pdo = new PDO("mysql:host=$host;dbname=$db", $username, $pass);
/* 
if ($pdo!=null) {
    $nom = "Ablam";
    $prenom = "Hippolyte";
    $age = 10;

    // définition de la requette
    $query = "INSERT INTO utilisateur (nom, prenom, age) VALUES (:nom, :prenom, :age);";
    // creation des paramètres pour la requette préparé
    $params = [
        'nom' => $nom,
        'prenom' => $prenom,
        'age' => $age,
    ];

    // préparer la requette
    $stmts = $pdo->prepare($query);
    $stmts->execute($params);
    echo "Utilisateur ajouté avec succès";

} */