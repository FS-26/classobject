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
    <form action="./traitement.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Personal Informations</legend>
            <div>
                <label for="firstname">Firstname :</label>
                <input type="text" name="firstname" id="firstname">
            </div>
            <div>
                <label for="lastname">Lastname :</label>
                <input type="text" name="lastname" id="lastname">
            </div>
            <div>
                <label for="age">Age :</label>
                <input type="number" min=1 name="age" id="age">
            </div>
            <input type="file" name="image" id="image">
        </fieldset>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
</body>

</html>