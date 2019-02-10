<?php
//connection à la base de donnée
require 'Database.php';
//est ce que le get est vide (logiquement non donc je vais direct au else en bas)
if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

//declaration des variables à vide
$nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = "";

//est-ce que la supper globla est vide
if (!empty($_POST)) {
    //on rempli les variables avec le contenu de la supper global (utilise la function checkInput pour netoyer)
    $name = checkInput($_POST['name_item']);
    $description = checkInput($_POST['description']);
    $price = checkInput($_POST['price']);
    $category = checkInput($_POST['category']);
    //on recupere l 'input de type file (qui est un tableau de tableau) je met sont son
    $image = checkInput($_FILES['image']['name']);
    //j'indique le chemin de l'image et la fonction basename recupere le nom de l image
    $imagePath = '../img/' . basename($image);
    //gere l'extension de l'image
    $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
    $isSuccess = true;

//    est ce que le champs nom est vide
    if (empty($name))
//   alors tu affiches le message=>
    {
        $nameError = 'Le champs nom doit être rempli';
        $isSuccess = false;
    }
    if (empty($description)) {
        $descriptionError = 'Le champs description doit être rempli';
        $isSuccess = false;
    }
    if (empty($price)) {
        $priceError = 'Le champs prix doit être rempli';
        $isSuccess = false;
    }
    if (empty($category)) {
        $categoryError = 'Le champs prix doit être rempli';
        $isSuccess = false;
    }
    if (empty($image)) {
        //si l'mage n'a pas etait update
        $isImageUpdated = false;
    } else {
        //sinon l'image a était update
        $isImageUpdated = true;
        $isUploadSuccess = true;
//        si l'extension est diff de ce là
        if ($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif")
//        alors il y a un probleme (false) et le meesage s'affiche
        {
            $imageError = "Les fichiers autorises sont : .jpg , .jpeg , .png , .gif";
            $isUploadSuccess = false;
        }
//        //est ce que l'image existe deja (grace au chemin et au nom)
        if (file_exists($imagePath)) {
//            message d'erreur
            $imageError = "le fichier existe déjà";
            $isUploadSuccess = false;
        }
        //limite le poid de l'image avec la taille de la supper cariable $_FILES
        if ($_FILES["image"]["size"] > 600000) {
//            affiche le message d'erreur
            $imageError = "Le fichier de doit pas dépasser les 600Kb";
            $isUploadSuccess = false;
        }
//        une fois tous les champs rempli=>
        if ($isUploadSuccess) {
//            la fonction la prendre le fichier et le mettre temporairemenr dans le "tmp_name" et tu le met dans le chemin $imagePath et s il y a une erreur elle affiche le message
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
                $imageError = "Il y eu une erreur lors de l'upload";
                $isUploadSuccess = false;
            }
        }
    }
    //si tout a était un succes ou si tout est un succes etque l'image n'a pas était update
    if (($isSuccess && $isImageUpdated && $isUploadSuccess) || ($isSuccess && !$isImageUpdated)) {
        $db = Database::connect();
        //si l'image a était update
        if ($isImageUpdated) {
            //mise a jour dans la table items:(name = ?;description = ?; price = ?; category->; image->)
            $statement = $db->prepare("UPDATE items set name_item = ?, description = ?, price = ?, category = ?, image = ? WHERE id = ?");
            //mettre à jour les nouvelle valeur
            $statement->execute(array($name, $description, $price, $category, $image, $id));
        } else {
            //sinon l'image n'a pas était update donc je met à jour le reste
            $statement = $db->prepare("UPDATE items set name_item = ?, description = ?, price = ?, category = ? WHERE id = ?");
            $statement->execute(array($name, $description, $price, $category, $id));
        }

//        ce deconnecte de la db
        Database::disconnect();
        //change l'adresse
        header("Location: index.php");
    }
    //dans le cas d'un non succes
    else if ($isImageUpdated && !$isUploadSuccess) {
        $db = Database::connect();
        $statement = $db->prepare("SELECT image FROM items WHERE id = ?");
        $statement->execute(array($id));
        $item = $statement->fetch();
        $image = $item['image'];
        Database::disconnect();
    }
}
//__________________________________________________________________________
//___________________________________________________________________________
else {
    $db = Database::connect();
    $statement = $db->prepare("SELECT * FROM items WHERE id = ?");
    $statement->execute(array($id));
    //recupere une ligne qui est un array
    $item = $statement->fetch();
//        permet de recuperer les ancien champ
    //        la 1ere variable est celle de ma db et la deuxieme celle que je remplis
    $name = $item['name_item'];
    $description = $item['description'];
    $price = $item['price'];
    $category = $item['category'];
    $image = $item['image'];
    Database::disconnect();

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>restaurant italien admin</title>
</head>
<body>
<h1 class="text-logo "><i class = "icon ion-md-restaurant"> </i> Restaurant italien ADMIN / MODIFIER <i class = "icon ion-md-restaurant"></i ></h1>
<div class="container admin">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h1>Modifier un item</h1>
            <br>
                <!--        enctype="multipart/form-data" permet de upplaoder une image -->
                <form class="form" role="form" action="<?php echo 'update.php?id=' . $id; ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">Nom :</label>
                        <input type="text" class="form-control" id="name" name="name_item" placeholder="Nom" value="<?php echo $name; ?>">
                        <span class="help-inline"><?php echo $nameError; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="description">Description :</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $description; ?>">
                        <span class="help-inline"><?php echo $descriptionError; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="price">Prix : (en €)</label>
                        <input type="number" step="0.10" class="form-control" id="price" name="price" placeholder="Prix" value="<?php echo $price; ?>">
                        <span class="help_inline"><?php echo $priceError; ?></span>
                    </div>

                    <div class="form-group">
                        <!-- va chercher les categorie direct dans la database-->
                        <label for="category">Catégorie :</label>
                        <select class="form-control" id="category" name="category">
                            <?php
//connection à la database
$db = Database::connect();
//boucle qui recupere tous (SELECT *) les champs de la table category (nom et id)
//   a chaque boucle il met le resultat dans la variable $row
foreach ($db->query('SELECT * FROM categories') as $row) {
    //recupere l'anciene valeur qui etait dans la db
    if ($row['id'] == $category) {
        echo '<option selected="selected" value="' . $row['id'] . '">' . $row['name'] . '</option>';
    } else
    //se positionne sur le  1er champ
    {
        echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }

}
Database::disconnect();
?>
                        </select>
                        <span class="help-inline"><?php echo $categoryError; ?></span>
                    </div>
                    <div class="form-group ">
                        <label for="">Image :</label>
                        <p><?php echo $image; ?></p>
                        <label for="image">Sélectionner une image :</label><br>
                        <!--type file (recupere un fichier)-->
                        <input type="file" id="image" name="image">
                         <span class=" help-inline"><?php echo $imageError; ?></span>
                    </div>

                    <br>

                    <div class="form-actions">
                        <button type="submit" class="btn text-white btn-success "><i class="far fa-edit"></i> Modifier</button>
                        <a class="btn btn-primary text-white" href="index.php"><i class="fas fa-arrow-left"></i> Retour</a>
                    </div>
                </form>
        </div>


        <div class="col-sm-12 col-md-6 site">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo '../img/' . $image; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $name; ?></h5>
                        <div class="price"><?php echo number_format((float) $price, 2, '.', '') . ' €'; ?></div>
                        <p class="card-text"><?php echo $description; ?> </p>

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

</html>
