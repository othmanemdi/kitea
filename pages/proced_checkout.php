<?php

ob_start();
// php
$title = "404";

$content_php = ob_get_clean();


ob_start(); ?>

<h1>Proced to checkout Page</h1>


<div class="row">
    <div class="col-md-8">
        <h3>Invoice Adresse</h3>

        <div class="card">

            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group mb-3">
                            <label>
                                First Name: <span class="text-danger fw-bold">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="First Name:">
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="form-group mb-3">
                            <label>
                                Last Name: <span class="text-danger fw-bold">*</span>
                            </label>
                            <input type="text" class="form-control" placeholder="Last Name:">
                        </div>
                        </>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>
                                    Address: <span class="text-danger fw-bold">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Address:">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>
                                    E-Mail:
                                </label>
                                <input type="email" class="form-control" placeholder="E-Mail Adresse:">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>
                                    Phone number: <span class="text-danger fw-bold">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="Phone number:">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label>
                                    City:
                                </label>
                                <input type="text" class="form-control" placeholder="City:">
                            </div>
                        </div>
                    </div>


                </div>
            </div>










        </div>

        <div class="col-md-4">
            <h3>Payement Summary</h3>

            <div class="p-3 bg-light">
                <div class="d-flex mb-3">
                    <div class="me-auto p-2">
                        <input type="text" class="form-control" placeholder="COUPON CODE">
                    </div>
                    <div class="p-2">
                        <button type="button" class="btn btn-dark">Apply</button>
                    </div>
                </div>

                <ul class="list-group">
                    <li class="bg-transparent list-group-item d-flex justify-content-between align-items-start">

                        <div class="ms-2 me-auto">

                            <div class="fw-bold">Order Summary:</div>

                        </div>

                        <span class="badge bg-dark rounded-pill">$155.00</span>

                    </li>


                    <li class="bg-transparent list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Discount:</div>
                        </div>
                        <span class="badge bg-dark rounded-pill">20%</span>
                    </li>

                    <li class="bg-transparent list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Subheading:</div>
                        </div>
                        <span class="badge bg-dark rounded-pill">$129.16</span>
                    </li>



                </ul>

                <a href="thanx_page" class="btn btn-dark mt-3 rounded-pill">
                    CONTINUE TO ORDER REVIEW
                </a>
            </div>



        </div>
    </div>

    <?php $content_html = ob_get_clean(); ?>