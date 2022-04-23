<?php

ob_start();
// php
$title = "Détails de la commande N°: 01";

$content_php = ob_get_clean();


ob_start(); ?>



<h2>Détails de la commande N°: 01</h2>

<div class="card shadow">
    <div class="card-header fw-bold">
        Détails de la commande N°: 01
    </div>

    <div class="card-body">

        <ul class="list-group w-50 fw-bold mb-4">
            <li class="list-group-item">Client: Ayoub</li>
            <li class="list-group-item">Date de commande: 18/04/2020</li>
            <li class="list-group-item">Adresse: Centre Atlantique </li>
            <li class="list-group-item">Téléphone: 06 88 44 66 33 </li>
            <li class="list-group-item">
                Statut:
                <span class="badge bg-success">
                    Livrée
                </span>
            </li>
        </ul>

        <div class="table-responsive">
            <table class="table table-bordered table-sm table-hovera">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Quantité</th>
                        <th>Prix U</th>
                        <th>Prix G</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="images/products_categories/_1_0_10011004287_3.jpg" width="50">
                        </td>
                        <td>3</td>
                        <td>1 000.00 DH</td>
                        <td>3 000.00 DH</td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fa-solid fa-trash-can"></i>

                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/products_categories/_1_0_10012515314_2.jpg" width="50">
                        </td>
                        <td>3</td>
                        <td>1 500.00 DH</td>
                        <td>4 500.00 DH</td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fa-solid fa-trash-can"></i>

                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/products_categories/_1_0_10021538318-2.jpg" width="50">
                        </td>
                        <td>3</td>
                        <td>1 700.00 DH</td>
                        <td>5 100.00 DH</td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fa-solid fa-trash-can"></i>

                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table-responsive -->

        <ul class="list-group list-group-flush w-25 fw-bold mt-3">
            <li class="list-group-item">Total Quantités: 9 Produits</li>
            <li class="list-group-item">Total TTC: 12 600.00 DH</li>
            <li class="list-group-item">Remise: 20%</li>
            <li class="list-group-item">Total à payer: 10 500.00 DH</li>
        </ul>

    </div>
    <!-- card-body -->
</div>
<!-- card -->


<?php $content_html = ob_get_clean(); ?>