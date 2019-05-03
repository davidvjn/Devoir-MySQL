<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un étudiant</title>
</head>
<body>
    <?php require './templates/header.html' ?>
    <main>
        <form action="./controllers/addOneStudent.php" method="POST">
            <div>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname">
            </div>
            <div>
                <label for="speciality">Spécialité</label>
                <input type="text" name="speciality">
            </div>
            <div>
                <label for="spareTime">Loisir</label>
                <input type="text" name="spareTime">
            </div>
            <br>
            <input type="submit" value="SEND">
        </form>
    </main>
</body>
</html>