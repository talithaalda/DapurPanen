<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/8b992594d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{ asset('css/styles.css?v=') . time() }} />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" href="/logo-circle.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="logo-nav">
                <img src={{ asset('logo.png') }} alt="logo" width="247px" height="47px">
            </div>


            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'home' ? 'active' : ' ' }}" aria-current="page"
                            href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'produk' ? 'active' : ' ' }}" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'promo' ? 'active' : ' ' }}" href="/promo">Promo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'aboutus' ? 'active' : ' ' }}" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Contact US</a>
                    </li>
                </ul>
            </div>
            <div class="btn btn-app" style="margin-right: 48px">
                <div class="btn-text">Download App</div>
            </div>
        </div>
    </nav>



    @yield('container')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
