<link rel="stylesheet" href="style.css">
<?php
session_start();
include "./database.php";
include "./person.php";

    // file upload management

 function uploadImage(){
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        return $target_file;
    } else {
        echo "Possible file upload attack!\n";
        return null;
    }
 }


if (isset($_POST["submit"])) {
    if (empty(trim($_POST["lastname"])) or empty(trim($_POST["firstname"])) or empty(trim($_POST["age"])) ) {
       echo "Veuillez remplir tous les champs";
    }else{
        $lastName = htmlspecialchars($_POST["lastname"]) ;
        $firstName = htmlspecialchars($_POST["firstname"]);
        $age = htmlspecialchars($_POST["age"]);
        $image = uploadImage();

        // Insertion dans la base de données
        
        if ($pdo!=null) {
         
            // définition de la requette
            $query = "INSERT INTO utilisateur (nom, prenom, age, picture) VALUES (:nom, :prenom, :age, :picture);";
            // creation des paramètres pour la requette préparé
            $params = [
                'nom' => $lastName,
                'prenom' => $firstName,
                'age' => $age,
                'picture' => $image,
            ];

            // préparer la requette
            $stmts = $pdo->prepare($query);
            $stmts->execute($params);
            // echo "Utilisateur ajouté avec succès";

        }

        
        // création d'un objet
        // $person = new Person($firstName, $lastName,$age,$image);
        // $person->displayInfo();
        // $_SESSION["firstName"]=  $firstName;
        // $_SESSION["lastname"]=  $firstName;
    }
    
    
    

    
}

$selectQuery = "select * from utilisateur";
    $statement = $pdo->prepare($selectQuery);
    $statement->execute();
    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
    // echo $data["prenom"];
    print_r($data);