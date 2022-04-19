<?php

ob_start();
// php
$title = "Produits test";



$products = $pdo->query("SELECT * FROM produits
    -- WHERE prix < 10
 ORDER BY id DESC")->fetchAll();

// echo "<pre>";
// print_r($products);
// echo "</pre>";
// die();



$content_php = ob_get_clean();

ob_start(); ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
</nav>

<h1>Produits test</h1>



<div class="row">
    <?php foreach ($products as $key => $p) : ?>

        <div class="col-lg-3 col-md-6 col-sm-12">

            <div class="card mb-3">
                <a href="product_details&id=<?= $p->id ?>">

                    <img src="images/products_categories/<?= $p->img ?>" class="card-img-top" height="350" alt="Test Image">
                </a>

                <div class="card-body">

                    <h4><?= $p->nom ?> <?= $p->id ?></h4>
                    <span class="fw-bold me-2">$<?= $p->prix ?></span>
                    <small> <del class="text-danger">$<?= $p->ancien_prix ?></del></small>
                    <br>
                    <a href="cart" class="btn btn-dark">Add to cart</a>

                </div>

            </div>

        </div>
        <!-- fin col -->
    <?php endforeach ?>

</div>
<!-- fin row -->


</div>

<?php $content_html = ob_get_clean(); ?>