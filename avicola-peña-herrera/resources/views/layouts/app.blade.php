<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avícola PH - @yield('titulo')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-oexR1aM2q7rNUqv6BL4oTLhYuk8Kp/EbZ5k2d8prD+Mys2LwXOdWQJ2HiIK8ot3/nzN1u+t3YlINNXxXan4cDQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ Vite::asset('resources/img/logoosc.png') }}" alt="logo_avicolanp" width="30" height="24" class="d-inline-block align-text-top">
                    Avícola PeñaHerrera
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/customers">Clientes</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Productos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/products">Inventario</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/products/create">Nuevo Producto</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Content -->
        <div class="mt-4">
            @yield('contenido')
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center text-white mt-5" style="background-color: #f1f1f1;">
        <div class="container pt-4">
            <section class="mb-4">
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#" role="button"><i class="fab fa-linkedin"></i></a>
                <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/edgardo07-code/avicola_laravel.git" role="button"><i class="fab fa-github"></i></a>
            </section>
        </div>
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-dark" href="#">avicolaph.com</a>
        </div>
    </footer>

    <!-- Font Awesome Kit -->
    <script src="https://kit.fontawesome.com/7e8a796a07.js" crossorigin="anonymous"></script>
</body>

</html>
