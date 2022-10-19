<?php

  if (isset($_POST['subLang'])) {
        $_COOKIE["userLang"]= $_POST['lang'] ;
        setcookie("userLang",$_POST['lang'],time()+(60*60*24*30));
        
    }
    $ln = "";
    $fn = "";
    $title = "Personal Informations";
    $btnTitle = "Submit";
    if (isset($_COOKIE["userLang"])) {
       if ($_COOKIE["userLang"] == "fr") {
        $ln = "Nom";
        $fn = "Prenom";
        $title = "Informations Personnelles";
        $btnTitle = "Enregistrer";
       }elseif ($_COOKIE["userLang"] == "en"){
         $ln = "Lastname :";
        $fn = "Firstname";
       }
    }

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Objects and Classes</title>
</head>

<body>

    <form action="./index.php" method="post">

        <select name="lang" id="lang">
            <option value="fr">Francais</option>
            <option value="en">Anglais</option>
        </select>
        <input type="submit" name="subLang" value="Save">
    </form>
    <form action="./traitement.php" method="post" enctype="multipart/form-data">

        <fieldset>
            <legend><?=$title?></legend>
            <div>
                <label for="firstname"><?=$fn?> :</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div>
                <label for="lastname"><?=$ln?> :</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div>
                <label for="age">Age :</label>
                <input type="number" min=1 name="age" id="age">
            </div>
            <input type="file" name="image" id="image">
        </fieldset>
        <div>
            <input type="submit" value="<?= $btnTitle?>" name="submit">
        </div>
    </form>
</body>

</html>