<?php

ob_start();
// php
$title = "Liste des commandes";

$content_php = ob_get_clean();


ob_start(); ?>


<h2>Liste des commandes</h2>

<div class="card shadow">
    <div class="card-body">
        <a href="order_add.html" class="btn btn-dark text-white mb-3">Ajouter une commande</a>
        <div class="table-responsive">
            <table class="table table-bordered table-sm table-hover">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Client</th>
                        <th>Date de commande</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>BC 03</td>
                        <td>Ayoub</td>
                        <td>20/04/2020</td>
                        <td>
                            <span class="badge bg-info">
                                En cours
                            </span>
                        </td>
                        <td>
                            <a href="commande_details" class="btn btn-sm btn-outline-dark">
                                <i class="fa-solid fa-eye"></i>

                            </a>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fa-solid fa-trash-can"></i>

                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td>BC 02</td>
                        <td>Maryam</td>
                        <td>19/04/2020</td>
                        <td>
                            <span class="badge bg-warning">
                                Retour
                            </span>
                        </td>
                        <td>
                            <a href="commande_details" class="btn btn-sm btn-outline-dark">
                                <i class="fa-solid fa-eye"></i>

                            </a>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fa-solid fa-trash-can"></i>

                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td>BC 01</td>
                        <td>Hind</td>
                        <td>18/04/2020</td>
                        <td>
                            <span class="badge bg-success">
                                Livrée
                            </span>
                        </td>
                        <td>
                            <a href="commande_details" class="btn btn-sm btn-outline-dark">
                                <i class="fa-solid fa-eye"></i>

                            </a>
                            <a href="" class="btn btn-sm btn-outline-danger">
                                <i class="fa-solid fa-trash-can"></i>

                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- table-responsive -->
    </div>
    <!-- card-body -->
</div>
<!-- card -->


<?php $content_html = ob_get_clean(); ?>