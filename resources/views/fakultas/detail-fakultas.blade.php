<x-layout>

    <style>
        body{
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            min-height: 100vh;
        }

        .detail-wrapper{
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .detail-card{
            width: 100%;
            max-width: 750px;
            border: none;
            border-radius: 32px;
            overflow: hidden;
            background: rgba(255,255,255,0.88);
            backdrop-filter: blur(14px);
            box-shadow:
                0 20px 60px rgba(0,0,0,0.08),
                0 4px 20px rgba(0,0,0,0.04);
        }

        .detail-header{
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            padding: 40px;
            text-align: center;
            color: white;
            position: relative;
        }

        .detail-header::before{
            content: "";
            position: absolute;
            width: 250px;
            height: 250px;
            background: rgba(255,255,255,0.08);
            border-radius: 50%;
            top: -100px;
            right: -80px;
        }

        .detail-icon{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            margin-bottom: 20px;
            font-size: 42px;
            backdrop-filter: blur(10px);
        }

        .detail-header h2{
            font-weight: 800;
            margin-bottom: 8px;
        }

        .detail-header p{
            opacity: 0.85;
            margin: 0;
        }

        .detail-body{
            padding: 40px;
        }

        .info-card{
            background: #f8fafc;
            border-radius: 22px;
            padding: 22px 24px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .info-card:hover{
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.05);
            background: white;
        }

        .info-label{
            font-size: 14px;
            font-weight: 700;
            color: #64748b;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .info-value{
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
        }

        .info-icon{
            width: 55px;
            height: 55px;
            border-radius: 16px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        .btn-back{
            height: 56px;
            border: none;
            border-radius: 16px;
            font-weight: 700;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(99,102,241,0.25);
        }

        .btn-back:hover{
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(99,102,241,0.35);
        }
    </style>

    <div class="container">
        <div class="detail-wrapper">
            <div class="card detail-card">

                <!-- HEADER -->
                <div class="detail-header">
                    <div class="detail-icon">
                        <i class="bi bi-buildings-fill"></i>
                    </div>
                    <h2>
                        Detail Fakultas
                    </h2>
                    <p>
                        Informasi lengkap data fakultas universitas
                    </p>
                </div>

                <!-- BODY -->
                <div class="detail-body">

                    <!-- NAMA FAKULTAS -->
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3">
                            <div class="info-icon">
                                <i class="bi bi-mortarboard-fill"></i>
                            </div>
                            <div>
                                <div class="info-label">
                                    Nama Fakultas
                                </div>
                                <div class="info-value">
                                    {{ $fakultas->nama_fakultas }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NAMA DEKAN -->
                    <div class="info-card">
                        <div class="d-flex align-items-center gap-3">
                            <div class="info-icon">
                                <i class="bi bi-person-badge-fill"></i>
                            </div>
                            <div>
                                <div class="info-label">
                                    Nama Dekan
                                </div>
                                <div class="info-value">
                                    {{ $fakultas->nama_dekan }}
                                </div>
                            </div>
                          </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="d-grid mt-4">
                        <a href="/fakultas" class="btn btn-primary btn-back">
                            <i class="bi bi-arrow-left-circle-fill me-2"></i>
                            Kembali ke List Fakultas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>