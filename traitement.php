<link rel="stylesheet" href="style.css">
<?php
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
        
        // création d'un objet
        $person = new Person($firstName, $lastName,$age,$image);
        $person->displayInfo();
    }
    
}