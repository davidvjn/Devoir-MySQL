<?php require './controllers/getStudents.php' ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
   <title>Membres de la DWM11 Academy</title>
</head>
<body>
    <?php require './templates/header.html' ?>

    <main>
        <div>
            <table>
                <tr>
                    <th>Prénom</th>
                    <th>Spécialité</th>
                    <th>Loisir</th>
                    <th>Modifier les caractéristiques de l'étudiant</th>
                    <th>Supprimer l'étudiant (not kill him!!!)</th>
                </tr>
                <?php foreach($students as $student): ?>
                    <tr>
                        <td><?= $student['firstname'] ?></td>
                        <td><?= $student['speciality'] ?></td>
                        <td><?= $student['spareTime'] ?></td>
                        <td>
                            <form action="./updateStudent.php" method="POST">
                                <input type="hidden" name="id" value="<?= $student['id'] ?>">
                                <input type="submit" value="UP">
                            </form>
                        </td>
                        <td>
                            <form action="./controllers/deleteOneStudent.php" method="POST">
                                <input type="hidden" name="id" value="<?= $student['id'] ?>">
                                <input type="submit" value="X">
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>    
            </table>
        </div>
    </main>
</body>
</html>