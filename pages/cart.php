<?php

ob_start();
// php
$title = "Cart";

$content_php = ob_get_clean();


ob_start(); ?>

<h2>Cart page</h2>


<div class="row">
    <div class="col-md-8">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="images/products/_1_0_10000452246-1k.jpg?123" width="50" alt="">
                        </td>
                        <td>Blue Dress</td>

                        <td>
                            <input type="number" class="form-control w-25" value="1">
                        </td>
                        <td>
                            <span class="fw-bold me-2">$60.00</span>
                            <small> <del class="text-danger">$75.00</del></small>
                        </td>
                        <td>
                            <a href="" class="text-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/products/_1_0_10012070234-1k.jpg" width="50" alt="">
                        </td>
                        <td>Vest</td>
                        <td>
                            <input type="number" class="form-control w-25" value="1">
                        </td>
                        <td>
                            <span class="fw-bold me-2">$55.00</span>
                            <small> <del class="text-danger">$85.00</del></small>
                        </td>

                        <td>
                            <a href="" class="text-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <img src="images/products/_1_0_10013694246-11.jpg" width="50" alt="">
                        </td>
                        <td>Dress</td>
                        <td>
                            <input type="number" class="form-control w-25" value="1">
                        </td>
                        <td>
                            <span class="fw-bold me-2">$40.00</span>
                            <small> <del class="text-danger">$65.00</del></small>
                        </td>

                        <td>
                            <a href="" class="text-danger">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>

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
                    <button type="button" class="btn bg-kitea text-white">Apply</button>
                </div>
            </div>

            <ul class="bg-transparent list-group">
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

            <a href="proced_checkout" class="btn bg-kitea text-white mt-3 rounded-pill">
                PROCED TO CHECKOUT
            </a>
        </div>



    </div>
</div>



<?php $content_html = ob_get_clean(); ?>