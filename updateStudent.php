<?php require_once './controllers/getOneStudent.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="./CSS_images/style.css" rel="stylesheet">
    <title>Update Student</title>
</head>
<body>
    <?php require './templates/header.html' ?>
    <main>
        <form action="./controllers/updateOneStudent.php" method="POST" class="formClass">
        <input type="hidden" name="id" value="<?= $student['id'] ?>">
            <div>
                <label for="firstname">Prénom</label>
                <input type="texte" name="firstname" value="<?= $student['firstname'] ?>">
            </div>
            <div>
                <label for="speciality">Spécialité</label>
                <input type="texte" name="speciality" value="<?= $student['speciality'] ?>">
            </div>
            <div>
                <label for="spareTime">Loisir</label>
                <input type="texte" name="spareTime" value="<?= $student['spareTime'] ?>">
            </div>
            <br>
            <input type="submit" value="SEND">    
        </form>
    </main>
</body>
</html>