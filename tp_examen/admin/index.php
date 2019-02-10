<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css"  rel="stylesheet" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>restaurant italien admin</title>
</head>
<body>
    <div class="container admin">
        <h1 class="text-logo "><i class = "icon ion-md-restaurant"> </i> Restaurant italien ADMIN <i class = "icon ion-md-restaurant"></i></h1>



        <div class="row">
            <h1>Liste des items <a href="insert.php" class="btn btn-info btn-sm text-dark font-weight-bold"><i class="fas fa-plus"></i> Ajouter</a></h1>
            <table class="table table-striped table-bordered ">
                <thead>
                    <tr class="text-center">
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Catégorie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    /*incure le ficher database.php, avec la methode connection*/
                require'Database.php';
                /*on met la methode connect de la class Database dans la variable $db*/
                $db = Database::connect();
                /*selectionner les id des items*/
                $statement = $db->query('SELECT items.id, items.name_item, items.description, items.price,  categories.name                                                   AS category
                                                  FROM items LEFT JOIN categories ON items.category = categories.id
                                                  ORDER BY items.id DESC');
//                $statement = $db->query("SELECT * FROM items");
                /*afficher les views de la requete sql (items) avec une boucle*/
                while($item = $statement->fetch())
                {
                    echo '<tr>';
                    echo '<td class="text-center">' . $item['name_item'] . '</td>';
                    echo '<td class="text-center">' . $item['description'] . '</td>';
//                    number_format permet de rajouter un chiffre apres la virgule
                    echo '<td class="text-center">' . number_format((float)$item['price'],2, '.', '') . '</td>';
                    echo '<td class="text-center">' . $item['category'] . '</td>';
                    echo '<td width=350>';
                /*ici on veut la ligne complete donc on prend l'id*/
                    echo '<a class="badge-primary btn-sm" href="view.php?id=' . $item['id'] . '"><i class = "icon ion-md-eye"> Voir</i></a>';
                    echo ' ';
                    echo '<a href="update.php?id=' . $item['id'] . '" class="badge-secondary btn-sm"><i class = "icon ion-md-create"> Modifier</i></a>';
                    echo ' ';

                    echo '<a href="delete.php?id='. $item['id'] . '" class="badge-danger btn-sm"><i class = "icon ion-md-trash"> Supprimer</i></a>';
                echo '</td>';
                echo '</tr>';
                }
                Database::disconnect();
                       ?>

                <!--<tr>
                    <td>Item 2</td>
                    <td>Description 2</td>
                    <td>Prix 2</td>
                    <td>Catégorie 2</td>
                    <td width=350>
                        <a href="view.php?id=2" class="badge badge-primary"><i class = "icon ion-md-eye"> Voir</i></a>
                        <a href="update.php?id=2" class="badge badge-secondary"><i class = "icon ion-md-create"> Modifier</i></a>
                        <a href="delete.php?id=2" class="badge badge-danger"><i class = "icon ion-md-trash"> Supprimer</i></a>
                    </td>
                </tr>-->

                </tbody>
            </table>
        </div>
    </div>

        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src = "https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>



</body>

