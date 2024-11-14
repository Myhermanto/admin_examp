<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="admin/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Administrator</title>

    <link rel="stylesheet" href="admin/css/dashboard.css">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="admin/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="bg-body-tertiary">


    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Administrator</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Administrator Wisata</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        </div>
    </nav>

    <div class="nav-scroller bg-body shadow-sm">
        <nav class="nav" aria-label="Secondary navigation">
            <a class="nav-link active" aria-current="page" href="#">Dashboard</a>

            <a class="nav-link" href="#">Tentang Kami</a>
            <a class="nav-link" href="#">Object Wisata</a>
            <a class="nav-link" href="#">Budaya</a>
            <a class="nav-link" href="#">Artikel</a>
            <a class="nav-link" href="#">Kontak Kami</a>
            <a class="nav-link" href="#">Pengguna Admin</a>
            <a class="nav-link" href="#">Keluar</a>
        </nav>
    </div>

    <main class="container">
        <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
            <img class="me-3" src="admin/brand/bootstrap-logo-white.svg" alt="" width="48" height="38">
            <div class="lh-1">
                <h1 class="h6 mb-0 text-white lh-1">Administrator</h1>
                <small>Halaman Admin</small>
            </div>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">

            <row class="mb-12">
                <form action="" method="post">


                    <p class="d-block text-gray-dark">Judul</p>

                    <input type="text" class="form-control">
                    </p>
                    <p class="d-block text-gray-dark">Judul</p>

                    <input type="text" class="form-control">
                    </p>
            </row>
            <small class="d-block text-end mt-3">

                <button type="submit" class="btn btn-info">Simpan </button> <br></small>

            </form>
        </div>


    </main>
    <script src="admin/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="admin/dashboard.js"></script>
</body>

</html>
