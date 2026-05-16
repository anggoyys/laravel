<x-layout>

    <style>
        body{
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            min-height: 100vh;
        }

        .form-wrapper{
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-card{
            width: 100%;
            max-width: 650px;
            border: none;
            border-radius: 30px;
            overflow: hidden;
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(14px);
            box-shadow:
                0 15px 50px rgba(0,0,0,0.08),
                0 4px 20px rgba(0,0,0,0.04);
        }

        .form-header{
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            padding: 35px;
            color: white;
            text-align: center;
        }

        .form-header h2{
            font-weight: 800;
            margin-bottom: 8px;
        }

        .form-header p{
            opacity: 0.85;
            margin: 0;
        }

        .form-body{
            padding: 40px;
        }

        .form-label{
            font-weight: 700;
            color: #334155;
            margin-bottom: 10px;
        }

        .form-control{
            height: 58px;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
            padding: 0 18px;
            font-size: 15px;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-control:focus{
            border-color: #6366f1;
            box-shadow: 0 0 0 4px rgba(99,102,241,0.15);
            background: white;
        }

        .input-group-text{
            border-radius: 16px 0 0 16px;
            border: 1px solid #e2e8f0;
            background: #eef2ff;
            color: #4f46e5;
            font-size: 18px;
        }

        .btn-save{
            height: 58px;
            border: none;
            border-radius: 16px;
            font-weight: 700;
            font-size: 16px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(99,102,241,0.25);
        }

        .btn-save:hover{
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(99,102,241,0.35);
        }

        .form-icon{
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            margin-bottom: 20px;
            font-size: 40px;
        }
    </style>

    <div class="container">

        <div class="form-wrapper">

            <div class="card form-card">

                <!-- HEADER -->
                <div class="form-header">

                    <div class="form-icon">
                        <i class="bi bi-buildings-fill"></i>
                    </div>

                    <h2>
                        Tambah Fakultas
                    </h2>

                    <p>
                        Form input data fakultas universitas
                    </p>

                </div>

                <!-- BODY -->
                <div class="form-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="/fakultas" method="POST">
                        @csrf
                        <!-- NAMA FAKULTAS -->
                        <div class="mb-4">
                            <label class="form-label">
                                Nama Fakultas
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-mortarboard-fill"></i>
                                </span>
                                <input
                                    name="nama_fakultas"
                                    type="text"
                                    placeholder="Masukkan nama fakultas..."
                                    class="form-control"
                                    >
                            </div>
                        </div>
                        <!-- NAMA DEKAN -->
                        <div class="mb-4">

                            <label class="form-label">
                                Nama Dekan
                            </label>

                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-person-badge-fill"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama_dekan"
                                    id="nama_dekan"
                                    placeholder="Masukkan nama dekan..."
                                    class="form-control"
                                    >

                            </div>

                        </div>

                        <!-- BUTTON -->
                        <div class="d-grid mt-4">

                            <button type="submit" class="btn btn-primary btn-save">

                                <i class="bi bi-save2-fill me-2"></i>
                                Simpan Data Fakultas

                            </button>
                    </form>
                </div>
               </div>
        </div>
    </div>
</x-layout>