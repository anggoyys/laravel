<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Fakultas</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        body{
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #212529;
        }
        /* Content */
        main{
            min-height: 100vh;
            padding: 30px 0;
        }

        .content-wrapper{
            background: #fff;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }

        /* Button */
        .btn{
            border-radius: 10px;
            font-weight: 500;
        }

        /* Footer */
        footer{
            background-color: #fff;
            border-top: 1px solid #e9ecef;
            padding: 18px 0;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
        }

    </style>

</head>

<body>
    {{-- CONTENT --}}
    <main>
        <div class="container">
            <div class="content-wrapper">
                {{ $slot }}
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            © {{ date('Y') }} Sistem Informasi Fakultas
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
</html>