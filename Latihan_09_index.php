<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Alumni</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        body {
            margin: 0;
        }
        .jumbotron-bg {
            background-image: url('fkom.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="jumbotron-bg text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 text-bold">Portal Alumni</h1>
            <p class="lead">Selamat datang di Portal Alumni, tempat alumni saling terhubung.</p>
        </div>
    </header>

    <div class="container-fluid my-4">
        <div class="row">
            <!-- Menu -->
            <aside class="col-md-2 p-0">
                <nav class="nav flex-column bg-light p-3 m-0">
                    <a class="nav-link" href="?menu=home">Home</a>
                    <a class="nav-link" href="?menu=alumni">Alumni</a>
                    <a class="nav-link" href="?menu=bukutamu">Buku Tamu</a>
                    <a class="nav-link" href="?menu=bursa">Bursa Kerja</a>
                    <a class="nav-link" href="?menu=penelusuran">Penelusuran Alumni</a>
                </nav>
            </aside>
            
            <!-- Konten -->
            <main class="col-md-10">
                <article>
                    <?php
                    extract($_GET);
                    if (isset($menu)) {
                        if ($menu == "home") {
                            @include "Latihan_09_home.php";
                        } elseif ($menu == "alumni") {
                            @include "Latihan_09_ralumni.php";
                        } elseif ($menu == "calumni") {
                            @include "Latihan_09_calumni.php";
                        } elseif ($menu == "ualumni") {
                            @include "Latihan_09_ualumni.php";
                        } elseif ($menu == "bukutamu") {
                            @include "Latihan_09_bukutamu.php";
                        } elseif ($menu == "bursa") {
                            @include "Latihan_09_bursa.php";
                        } elseif ($menu == "penelusuran") {
                            @include "Latihan_09_penelusuran.php";
                        } else {
                            @include "Latihan_09_home.php";
                        }
                    } else {
                        @include "Latihan_09_home.php";
                    }
                    ?>
                </article>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Portal Alumni. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>