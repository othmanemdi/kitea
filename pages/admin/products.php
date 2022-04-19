<?php

ob_start();
// php
$title = "Products 2";



$content_php = ob_get_clean();


ob_start(); ?>

<h1>Products page</h1>




<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Couleur</th>
                <th>Prix</th>
                <th>Ancien Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key => $p) : ?>
                <tr>
                    <td>
                        <?= $p->id ?>
                    </td>

                    <td>
                        <?= $p->nom ?>
                    </td>

                    <td>
                        <?= ucfirst($p->couleur) ?>
                    </td>



                    <td>
                        <?= $p->prix ?>
                    </td>

                    <td>
                        <?= $p->ancien_prix ?>
                    </td>

                    <td>
                        <button type="button" class="btn btn-dark btn-sm">Modifier</button>

                        <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
                    </td>

                </tr>
            <?php endforeach  ?>

        </tbody>
    </table>
</div>

<?php $content_html = ob_get_clean(); ?>