<?php
//connection à la base de donnée
require 'database.php';
//recuperer l'id s'il n'est pas vide via la supper global et le mettre dans une variable $id
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

//ce connecter a la database
$db = Database::connect();
$statement = $db->prepare('SELECT items.id, items.name_item, items.description, items.price,items.image, categories.name                                                   AS category
                                                  FROM items LEFT JOIN categories ON items.category = categories.id
                                                  WHERE items.id=?');
$statement->execute(array($id));
$item = $statement->fetch();
Database::disconnect();

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>restaurant italien admin</title>
</head>
<body>
<div class="container admin">
<h1 class="text-logo "><i class = "icon ion-md-restaurant"> </i> Restaurant italien ADMIN <i class = "icon ion-md-restaurant"></i ></h1>



    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h1>Voir un item</h1>
        <br>
        <form>
            <div class="form-group">
                <label>Nom:</label><?php echo '  ' . $item['name_item']; ?>
            </div>
            <div class="form-group">
                <label>Description:</label><?php echo '  ' . $item['description']; ?>
            </div>
            <div class="form-group">
                <label>Prix:</label><?php echo '  ' . number_format((float) $item['price'], 2, '.', '') . ' €'; ?>
            </div>
            <div class="form-group">
                <label>Catégorie:</label><?php echo '  ' . $item['category']; ?>
            </div>
            <div class="form-grop">
                <label>Image:</label><?php echo '  ' . $item['image']; ?>
            </div>
        </form>
            <br>
            <br>
    <div class="form-actions">
        <a class="btn btn-primary text-white" href="index.php"> <i class="fas fa-arrow-left"></i> Retour</a>
    </div>
    </div>

        <div class="col-sm-12 col-md-6">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo '../img/' . $item['image']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo '  ' . $item['name_item']; ?></h5>
                     <div class="price"><?php echo number_format((float) $item['price'], 2, '.', '') . ' €'; ?></div>
                    <p class="card-text"><?php echo '  ' . $item['description']; ?> </p>

                    <a href="#" class="btn btn-order " role="button"><span><ion-icon size = "small" name="cart"></ion-icon></span>Commander</a>
                </div>
                </div>
            </div>
    </div>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src = "https://unpkg.com/ionicons@4.3.0/dist/ionicons.js"></script>



</body>


