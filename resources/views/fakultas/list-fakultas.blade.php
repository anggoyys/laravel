<x-layout>

    <style>
        body{
            background: linear-gradient(to right, #eef2ff, #f8fafc);
        }

        .page-title{
            font-weight: 800;
            font-size: 2rem;
            background: linear-gradient(90deg, #2563eb, #7c3aed);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .card-custom{
            border: none;
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(10px);
            box-shadow:
                0 10px 40px rgba(0,0,0,0.08),
                0 2px 10px rgba(0,0,0,0.04);
        }

        .card-header-custom{
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            padding: 24px;
            color: white;
        }

        .btn-add{
            background: white;
            color: #2563eb;
            border: none;
            padding: 12px 20px;
            border-radius: 14px;
            font-weight: 700;
            transition: 0.3s;
        }

        .btn-add:hover{
            transform: translateY(-2px);
            background: #f8fafc;
        }

        .custom-table{
            margin: 0;
        }

        .custom-table thead{
            background: #111827;
            color: white;
        }

        .custom-table thead th{
            padding: 18px;
            border: none;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .custom-table tbody td{
            padding: 18px;
            vertical-align: middle;
            border-color: #f1f5f9;
        }

        .custom-table tbody tr{
            transition: all 0.25s ease;
        }

        .custom-table tbody tr:hover{
            background: #f8faff;
            transform: scale(1.01);
            box-shadow: 0 8px 24px rgba(0,0,0,0.04);
        }

        .number-badge{
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            box-shadow: 0 4px 12px rgba(37,99,235,0.3);
        }

        .faculty-name{
            font-weight: 700;
            font-size: 15px;
            color: #0f172a;
        }

        .dekan-name{
            color: #64748b;
            font-weight: 500;
        }

        .btn-action{
            border: none;
            border-radius: 12px;
            padding: 9px 14px;
            font-size: 13px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-detail{
            background: #0ea5e9;
            color: white;
        }

        .btn-detail:hover{
            background: #0284c7;
            transform: translateY(-2px);
        }

        .btn-edit{
            background: #facc15;
            color: #111827;
        }

        .btn-edit:hover{
            background: #eab308;
            transform: translateY(-2px);
        }

        .btn-delete{
            background: #ef4444;
            color: white;
        }

        .btn-delete:hover{
            background: #dc2626;
            transform: translateY(-2px);
        }

        .empty-state{
            padding: 60px 20px;
            text-align: center;
            color: #94a3b8;
        }
    </style>

    <div class="container py-5">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

            <div>
                <h1 class="page-title mb-1">
                    🎓 List Fakultas
                </h1>

                <small class="text-muted">
                    Dashboard Manajemen Data Fakultas
                </small>
            </div>

            <a href="/fakultas/create" class="btn btn-add shadow-sm">
                <i class="bi bi-plus-circle-fill me-1"></i>
                Tambah Fakultas
            </a>

        </div>

        <!-- CARD TABLE -->
        <div class="card card-custom">

            <div class="card-header-custom">
                <h5 class="mb-0 fw-bold">
                    📚 Data Fakultas Universitas
                </h5>
            </div>

            <div class="table-responsive">

                <table class="table custom-table align-middle">

                    <thead>
                        <tr>
                            <th width="90">No</th>
                            <th>Fakultas</th>
                            <th>Dekan</th>
                            <th width="280" class="text-center">
                                Aksi
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($fakultas as $item)

                            <tr>

                                <!-- NOMOR -->
                                <td>
                                    <div class="number-badge">
                                        {{ $loop->iteration }}
                                    </div>
                                </td>

                                <!-- FAKULTAS -->
                                <td>
                                    <div class="faculty-name">
                                        {{ $item->nama_fakultas }}
                                    </div>
                                </td>

                                <!-- DEKAN -->
                                <td>
                                    <div class="dekan-name">
                                        {{ $item->nama_dekan }}
                                    </div>
                                </td>

                                <!-- AKSI -->
                                <td>

                                    <div class="d-flex justify-content-center gap-2 flex-wrap">

                                        <a href="/fakultas/{{ $item->id }}"
                                            class="btn btn-action btn-detail">

                                            <i class="bi bi-eye-fill"></i>
                                            Detail
                                        </a>

                                        <a href="/fakultas/{{ $item->id }}/edit"
                                            class="btn btn-action btn-edit">

                                            <i class="bi bi-pencil-square"></i>
                                            Edit
                                        </a>

                                        <form action="/fakultas/{{ $item->id }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus data?')">

                                            @csrf
                                            @method("DELETE")

                                            <button type="submit"
                                                class="btn btn-action btn-delete">

                                                <i class="bi bi-trash-fill"></i>
                                                Hapus
                                            </button>

                                        </form>

                                    </div>

                                </td>
                            </tr>
                            
                        @empty
                            <tr>
                                <td colspan="4">
                                     <div class="empty-state">
                                        <h4 class="fw-bold mb-2">
                                            📂 Belum Ada Data
                                        </h4>
                                        <p class="mb-0">
                                            Data fakultas belum tersedia
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>