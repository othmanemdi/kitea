<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Kitea</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $page == "home" ? "active" : "" ?>" href="home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page == "shop" ? "active" : "" ?>" href="shop">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page == "cart" ? "active" : "" ?>" href="cart">Cart</a>
                </li>

            </ul>

            <ul class="d-flex navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $page == "login" ? "active" : "" ?>" href="login">Connexion</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $page == "register" ? "active" : "" ?>" href="register">Créer un compte</a>
                </li>

            </ul>

            <!-- <ul class="d-flex navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="cart.html" class="nav-link active me-5  position-relative">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="position-absolute top-75 start-100 translate-middle badge rounded-pill bg-danger">
                            3
                        </span>
                    </a>
                </li>

            </ul> -->

        </div>
    </div>
</nav>