<header>
    <nav class="navbar navbar-expand-lg transparent navbar-transparent navbar-dark">
        <div class="container px-3">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/xfera/xferatech_name.png') }}" alt="Logo" style="width: 120px;">
            </a>
            <button class="navbar-toggler offcanvas-nav-btn" type="button">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                <div class="offcanvas-header">
                    <a href="#" class="text-inverse">
                        <img src="{{ asset('img/xfera/xferatech_name.png') }}" alt="Logo" style="width: 120px;">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#products">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#for-you">Para você</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="#">Item 4</a>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acessibilidade</a>
                            <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
                                <div class="dropdown-header">Alto Contraste</div>
                                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                    <div class="d-flex align-items-center">
                                        <i class="bi theme-icon bi-sun-fill"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Claro</h5>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                    <div class="d-flex align-items-center">
                                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Escuro</h5>
                                        </div>
                                    </div>
                                </button>
                                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                    <div class="d-flex align-items-center">
                                        <i class="bi theme-icon bi-circle-half"></i>
                                        <div class="ms-3">
                                            <h5 class="mb-1">Automático</h5>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-3 mt-lg-0 d-flex align-items-center">
                        <a href="#contact" class="btn btn-danger">Contato</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
