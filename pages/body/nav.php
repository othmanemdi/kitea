<div class="sticky-topa mb-3">
    <nav class="bg-white border-bottom">
        <div class="d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item me-5">
                    <a class="nav-link link-dark px-2 <?= $page == "home" ? "activated" : "" ?>" href="home">Home</a>
                </li>
                <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Catégories
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Salon</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Salle à manger</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Chambre à coucher</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Chambre enfant</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Chambre bébé</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Rangement</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Mobilier pro</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#">Jardin</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item me-5">
                    <a class="nav-link link-dark px-2  <?= $page == "shop" ? "activated" : "" ?>" href="shop">Shop</a>
                </li>

                <li class="nav-item me-5">
                    <a class="nav-link link-dark px-2 <?= $page == "cart" ? "activated" : "" ?>" href="cart">Cart</a>
                </li>

            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a href="login" class="nav-link link-dark px-2 <?= $page == "login" ? "activated" : "" ?>">Connection</a>
                </li>
                <li class="nav-item">
                    <a href="register" class="nav-link link-dark px-2 <?= $page == "register" ? "activated" : "" ?>">Créer un compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>