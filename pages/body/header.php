<?php
$products = glob('images/products/*.jpg');
?>

<div class="row">
    <div class="col-auto me-auto mb-3">
        <img src="images/logo/logo_KITEA_.png" alt="" height="50">
    </div>

    <div class="col-md-5 me-auto mb-3">

        <div class="dropdown menu">

            <form>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control dropdown-toggle border-danger border-2 rounded-end rounded-pill" type="button" id="searsh_products" data-bs-toggle="dropdown" aria-expanded="false" autocomplete="false" placeholder="Saisissez votre recherche...">
                    <button class="btn bg-kitea text-white rounded-start rounded-pill px-4">
                        <i class="fas fa-search"></i>
                    </button>


                    <div class="dropdown-menu list-unstyled mb-0 w-100" aria-labelledby="searsh_products">
                        <?php foreach ($products as $k => $c) :
                            if ($k === 3) break;
                        ?>
                            <a class="dropdown-item p-0 px-2" href="cart">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <img class="me-auto p-2" src="<?= $c ?>" width="80">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5>Product <?= $k + 1 ?></h5>
                                        <div>
                                            <span class="fw-bold me-2">$60.00</span>
                                            <small> <del class="text-danger">$75.00</del></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>

                <!-- <div class="input-group input-group-lg">
                    <input type="text" class="form-control border-danger border-2 rounded-end rounded-pill " placeholder="Saisissez votre recherche...">
                    <button class="btn bg-kitea text-white rounded-start rounded-pill px-4">
                        <i class="fas fa-search"></i>
                    </button>
                </div> -->


            </form>

        </div>

    </div>

    <div class="col-auto mb-3">
        <div class="ms-4 mt-3">
            <a href="cart" class="position-relative text-dark">
                <i class="fas fa-shopping-cart fs-5"></i>
                <span class="position-absolute top-75 start-100 translate-middle badge bg-kitea rounded-pill">
                    3
                </span>
            </a>
        </div>
    </div>
</div>

<hr>



<!-- 
<div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="#">World</a>
        <a class="p-2 link-secondary" href="#">U.S.</a>
        <a class="p-2 link-secondary" href="#">Technology</a>
        <a class="p-2 link-secondary" href="#">Design</a>
        <a class="p-2 link-secondary" href="#">Culture</a>
    </nav>
</div> -->