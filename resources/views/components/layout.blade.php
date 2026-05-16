<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard Fakultas</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body{
            background: #f4f7fb;
        }

        .navbar-custom{
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            padding: 14px 0;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .navbar-brand{
            font-size: 1.4rem;
            font-weight: 700;
            color: white !important;
            letter-spacing: 1px;
        }

        .navbar-brand i{
            color: #ffd43b;
        }

        .nav-link{
            color: rgba(255,255,255,0.85) !important;
            font-weight: 500;
            transition: 0.3s;
            border-radius: 10px;
            padding: 8px 14px !important;
        }

        .nav-link:hover{
            background: rgba(255,255,255,0.15);
            color: white !important;
            transform: translateY(-2px);
        }

        .btn-login{
            border-radius: 12px;
            padding: 8px 18px;
            font-weight: 600;
        }

        main{
            padding: 30px 0;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <i class="bi bi-mortarboard-fill"></i>
                SIMAK Kampus
            </a>

            <!-- Toggle Mobile -->
            <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav mx-auto gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house-door-fill me-1"></i>
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-buildings-fill me-1"></i>
                            Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people-fill me-1"></i>
                            Mahasiswa
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-journal-bookmark-fill me-1"></i>
                            Jurusan
                        </a>
                    </li>

                </ul>

                <!-- Right Button -->
                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <button class="btn btn-light btn-login">
                        <i class="bi bi-box-arrow-in-right"></i>
                        Login
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="container">
        @if (session('success'))
            <div class="alert alert succes">
                {{ session('success') }}
            </div>
        @endif
        {{ $slot }}
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>