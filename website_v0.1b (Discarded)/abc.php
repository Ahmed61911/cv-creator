<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="abc.php" method="post">
        <label>nom:</label><br>
        <input type="text" name="nom">
    <?php
        $nom = $_POST["nom"];
        echo "Bonjour " . $nom;
    ?>
    </form>
</body>
</html>