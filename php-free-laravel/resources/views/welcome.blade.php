<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ExclusiveUnlock Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />

    <style>
        .header-top {
            background-color: #f8f9fa;
            padding: 0.5rem 0;
        }

        .header-middle {
            background-color: #fff;
            padding: 1rem 0;
            border-bottom: 1px solid #e9ecef;
        }

        .header-bottom {
            background-color: #343a40;
            padding: 0.5rem 0;
        }

        .navbar-products .nav-link {
            color: #fff !important;
        }

        .navbar-products .nav-link:hover {
            color: #ffc107 !important;
        }

        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ddd;
            border-radius: 0.375rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            z-index: 1000;
            max-height: 300px;
            overflow-y: auto;
            display: none;
        }

        .search-results.show {
            display: block;
        }

        .search-results li {
            list-style: none;
            padding: 0.5rem 1rem;
            border-bottom: 1px solid #f1f1f1;
        }

        .search-results li:last-child {
            border-bottom: none;
        }

        .search-results a {
            text-decoration: none;
            color: #333;
        }

        .search-results a:hover {
            color: #0d6efd;
        }

        .flag {
            width: 20px;
            height: 15px;
            display: inline-block;
            background-size: cover;
            margin-right: 0.5rem;
        }

        .cursor-pointer {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <!-- Header Top -->
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <nav class="nav align-items-center justify-content-between">
                    <div class="d-flex">
                        <span class="nav-link text-muted">
                            <i class="fas fa-phone"></i> 9999999999
                        </span>
                        <span class="nav-link text-muted">
                            <i class="fas fa-envelope"></i> contactus@yoursite.com
                        </span>
                    </div>

                    <div class="d-flex">
                        <!-- Currency Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-link nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                $ <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" onclick="setCurrencyTo(1)">$</a></li>
                                <li><a class="dropdown-item" href="#" onclick="setCurrencyTo(2)">RM</a></li>
                            </ul>
                        </div>

                        <!-- Language Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-link nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="flag flag-gb"></span> <i class="fas fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="?selectlanguage=English&lcode=GB">
                                        <span class="flag flag-gb"></span> English</a></li>
                                <li><a class="dropdown-item" href="?selectlanguage=Spanish&lcode=ES">
                                        <span class="flag flag-es"></span> Spanish</a></li>
                                <li><a class="dropdown-item" href="?selectlanguage=French&lcode=FR">
                                        <span class="flag flag-fr"></span> French</a></li>
                                <li><a class="dropdown-item" href="?selectlanguage=German&lcode=DE">
                                        <span class="flag flag-de"></span> German</a></li>
                                <li><a class="dropdown-item" href="?selectlanguage=Chinese&lcode=CN">
                                        <span class="flag flag-cn"></span> Chinese</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Middle -->
        <div class="header-middle position-relative">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <a class="navbar-brand" href="#"> ExclusiveUnlock </a>

                    <div class="d-none d-lg-block">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="./index">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reseller Pricing <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./resellerpricing/imei">IMEI Service</a></li>
                                    <li><a class="dropdown-item" href="./resellerpricing/server">Server Service</a></li>
                                    <li><a class="dropdown-item" href="./resellerpricing/remote">Remote Service</a></li>
                                    <li><a class="dropdown-item" href="./resellerpricing/file">File Service</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./register">Registration</a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-center">
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-lock"></i> Login
                        </button>
                    </div>
                </nav>

                <!-- Offcanvas Mobile Menu -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reseller Pricing
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./resellerpricing/imei">IMEI Service</a></li>
                                    <li><a class="dropdown-item" href="./resellerpricing/server">Server Service</a></li>
                                    <li><a class="dropdown-item" href="./resellerpricing/remote">Remote Service</a></li>
                                    <li><a class="dropdown-item" href="./resellerpricing/file">File Service</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./register">Registration</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Bottom -->
        <div class="header-bottom position-relative">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-none d-lg-block flex-grow-1 me-3">
                        <nav class="nav navbar-products">
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>IMEI Services</span> <i class="fas fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./cart/group/1/service/imei/groupname/API-TEST-IMEI">API TEST IMEI</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <!-- Search -->
                    <div class="position-relative">
                        <div class="dropdown">
                            <button class="btn btn-link nav-link text-white px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-search"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-3" style="min-width: 300px;">
                                <input type="text" class="form-control" id="searchInput" placeholder="Search..." autocomplete="off">
                                <div id="searchResultsContainer" class="search-results mt-2">
                                    <ul id="searchResults" class="list-unstyled m-0"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content py-5">
        <div class="container">

            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="public/img/image1.jpg" class="d-block w-100" alt="Imagen 1">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/image2.jpg" class="d-block w-100" alt="Imagen 2">
                    </div>
                    <div class="carousel-item">
                        <img src="public/img/image3.jpg" class="d-block w-100" alt="Imagen 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </div>

        <!-- Features Section -->
        <div class="index-content mb-4 bottom-space">
            <div class="container">
                <div class="page-container">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <i class="fas fa-life-ring big-icon text-primary mb-3" style="font-size: 3rem;"></i>
                                    <h2 class="h4 mb-3">24 Hours Support</h2>
                                    <p class="text-muted">Support 24 hours / 7 days-a-week. Company Name operates a 24 hour/7 day-a-week email & remote support services that is staffed to handle any issue or question for the systems that we develop or support. Handled directly by our knowledgeable staff ensuring a quick and accurate response</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm bg-primary text-white">
                                <div class="card-body text-center p-4">
                                    <i class="fas fa-tags big-icon mb-3" style="font-size: 3rem;"></i>
                                    <h2 class="h4 mb-3">Attractive Prices</h2>
                                    <p>If you find a cheaper price from our competitors but you still want to use Company Name services, please feel free to contact us. All our advertised prices can be negotiated and we can always beat the competition</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <i class="fas fa-info-circle big-icon text-primary mb-3" style="font-size: 3rem;"></i>
                                    <h2 class="h4 mb-3">Simple Instruction</h2>
                                    <p class="text-muted">Our instructions are easy to follow and only require that you can enter the unlocking code using your keypad. If you can dial a telephone number, then you can enter the code!</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm bg-success text-white">
                                <div class="card-body text-center p-4">
                                    <i class="fas fa-lock big-icon mb-3" style="font-size: 3rem;"></i>
                                    <h2 class="h4 mb-3">Absolutely Safe</h2>
                                    <p>Completely safe, with no risk to your phone or hardware. No software downloads are required. Alongside unlocking, your money is completely secure as well.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body text-center p-4">
                                    <i class="fas fa-dollar-sign big-icon text-primary mb-3" style="font-size: 3rem;"></i>
                                    <h2 class="h4 mb-3">Money Back Guarantee</h2>
                                    <p class="text-muted">All of the services on our websites are covered by our 100% Money Back Guarantee. We provide such a guarantee to give honest customers the reassurance that the unlocking service they are ordering will be delivered in good faith.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 shadow-sm bg-info text-white">
                                <div class="card-body text-center p-4">
                                    <i class="fas fa-envelope big-icon mb-3" style="font-size: 3rem;"></i>
                                    <h2 class="h4 mb-3">Expeditious Delivery</h2>
                                    <p>All unlock codes and unlock confirmations are sent by e-mail to the e-mail address that the customer provides on the order form. We make sure the delivery of unlocking codes is time-efficient. If delayed, we'll inform our clients / resellers via e-mail.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="loginUsername" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="loginUsername" placeholder="Ingresa tu usuario">
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Ingresa tu contraseña">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Reseller Modal -->
    <div class="modal fade" id="resellerModal" tabindex="-1" aria-labelledby="resellerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resellerModalLabel">Panel de Reseller</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Ingresa tu contraseña">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-body-tertiary text-center">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <a class="text-body" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Currency function
        function setCurrencyTo(currency) {
            console.log('Currency set to:', currency);
        }

        // Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const resultsContainer = document.getElementById('searchResults');
            const searchResultsContainer = document.getElementById('searchResultsContainer');

            if (searchInput) {
                searchInput.addEventListener('input', function(e) {
                    const searchTerm = e.target.value.toLowerCase().trim();

                    if (searchTerm.length > 2) {
                        searchResultsContainer.classList.add('show');
                        resultsContainer.innerHTML = '<li class="text-muted">Buscando...</li>';

                        // Simulate search results
                        setTimeout(() => {
                            resultsContainer.innerHTML = `
                                <li><a href="#" class="d-block">Servicio IMEI</a></li>
                                <li><a href="#" class="d-block">Servicio Remoto</a></li>
                                <li><a href="#" class="d-block">Soporte 24/7</a></li>
                                <li><a href="#" class="d-block">Desbloqueo iPhone</a></li>
                                <li><a href="#" class="d-block">Desbloqueo Samsung</a></li>
                            `;
                        }, 500);
                    } else {
                        searchResultsContainer.classList.remove('show');
                        resultsContainer.innerHTML = '';
                    }
                });
            }
        });
    </script>
</body>

</html>
