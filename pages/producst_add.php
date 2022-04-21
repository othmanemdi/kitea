<?php

ob_start();
// php
$title = "Add New Product";

$content_php = ob_get_clean();


if (isset($_POST['ajt_produit'])) {

    $nom_image = $_POST['nom'];
    $prix_image = $_POST['prix'];
    $ancien_prix_image = $_POST['ancien_prix'];
    $couleur_image = $_POST['couleur'];
    $categorie_image = $_POST['categorie'];
    $name_image = $_FILES["img"]["name"];
  
    $target_dir = "images/products_categories/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);


    // $pdo->

    // INSERT INTO produits (id, nom, prix, ancien_prix, couleur, categorie, img) VALUES (NULL, 'test', '123', '1234', 'test', 'test', '1.jpg');

        $produit = $pdo->prepare("INSERT INTO produits SET 
            nom = :nom_image ,
            prix = :prix_image,
            ancien_prix = :ancien_prix_image,
            couleur = :couleur_image,
            categorie = :categorie_image,
            img = :name_image
    ");

        $produit->execute(
            [
                'nom_image' => $nom_image,
                'prix_image' => $prix_image,
                'ancien_prix_image' => $ancien_prix_image,
                'couleur_image' => $couleur_image,
                'categorie_image' => $categorie_image,
                'name_image' => $name_image
            ]
        );

        header('Location: shop');
        die();
}

ob_start(); ?>

<h1>Add New Product</h1>

<div class="row justify-content-md-center">
    <div class="col-8">
        <div class="bg-light p-5 rounded-pilla rounded-3">
            <h2 class="text-center mb-4">AJOUTER UN NOUVEAU PRODUIT</h2>

            <h3 class="text-center">Informations de produit</h3>

            <form method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label class="form-label" for="nom">Nom de produit:</label>

                    <input name="nom" type="text" class="form-control" id="nom" placeholder="Veuillez saisir le nom SVP !">
                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="prix">Prix:</label>

                    <input name="prix" type="text" class="form-control" id="prix" placeholder="Veuillez saisir le prix SVP !">

                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="ancien_prix">Ancien Prix:</label>

                    <input name="ancien_prix" type="text" class="form-control" id="ancien_prix" placeholder="Veuillez entrer l'ancien prix SVP !">

                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="couleur">Couleur:</label>

                    <select name="couleur" id="couleur" class="form-control">
                        <option value="Rouge">Rouge</option>
                        <option value="Blanc">Blanc</option>
                        <option value="Noir">Noir</option>
                    </select>

                </div>

                <div class="form-group mb-3">
                    <label class="form-label" for="categorie">Catégorie:</label>

                    <select name="categorie" id="categorie" class="form-control">
                        <option value="Rangement">Rangement</option>
                        <option value="Chaises">Chaises</option>
                        <option value="Tables à manger">Tables à manger</option>
                        <option value="Canapé">Canapé</option>
                    </select>

                </div>


                <div class="form-group mb-3">
                    <label class="form-label" for="img">Image:</label>

                    <input name="img" type="file" class="form-control" id="img">
                </div>



                <button type="submit" name="ajt_produit" class="btn bg-kitea text-white">Ajouter</button>



                <button class="btn btn-secondary">Retour</button>
            </form>
        </div>
    </div>

</div>


<?php $content_html = ob_get_clean(); ?>