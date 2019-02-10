<?php
//connection à la base de donnée
require 'Database.php';
//si je fait passer un id dans la methode get alors tu le met dans une variable
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}
//(2eme passage : est ce la methode post est vide
//si elle n est pas vide (on a cliqué sur oui
if (!empty($_POST)) {
    $id = checkInput($_POST['id']);
//    pour supprimer
    $db = Database::connect();
    $statement = $db->prepare("DELETE FROM items WHERE id = ?");
    $statement->execute(array($id));
    Database::disconnect();
    header("Location: index.php");
}
//fonction qui nettoie
function checkInput($data)
{
    //permet d'enlever les espaces avant est apres
    $data = trim($data);
//Retourne une chaîne dont les antislashs on été supprimés
    $data = stripslashes($data);
//    enleve les balise html saisi
    $data = strip_tags($data);
    return $data;
}

?>

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
    <link href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css"  rel = "stylesheet" >

    <title>restaurant italien admin</title>
</head>
<body>
    <h1 class="text-logo "><i class = "icon ion-md-restaurant"> </i> Restaurant italien ADMIN / AJOUTER <i class = "icon ion-md-restaurant"></i ></h1>
    <div class="container admin">
        <h1>Supprimer un item</h1>
        <br>
        <div class="row">
        <form class="form" role="form" action="delete.php" method="POST">
            <!--  ON VA METTRE L'ID DANS UN FORMULAIRE qu'on va recuoerer avec la methode post
                  pour qu'au deuxieme(si on dit oui) passage (du code) on la supprime de la base de donnée-->
            <input type="hidden" name="id"  value="<?php echo $id; ?>" />
            <p class="alert alert-warning">Etes vous sur de vouloir supprimer</p>
            <div class="form-action">

                <button type="submit" class="btn text-white btn-warning">Oui</button>
                <a class="btn btn-secondary text-white" href="index.php">Non</a>
            </div>
        </form>
    </div>
</div>


<!--<script src="../js/jquery-3.3.1.min.js"></script>-->
<!--<script src="../js/popper.min.js"></script>-->
<!--<script src="../js/bootstrap.min.js"></script>-->
<!--<script src = "https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>-->
</body>

</html>
