<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-lg border-0 rounded-4">
                    
                    <div class="card-header bg-primary text-white text-center rounded-top-4 py-4">
                        <h3 class="mb-0 fw-bold">
                            Form Data Prodi
                        </h3>
                        <small>Silakan isi data Prodi dengan lengkap</small>
                    </div>

                    <div class="card-body p-4">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/prodi" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Prodi
                                </label>

                                <input 
                                    type="text"
                                    name="nama_prodi"
                                    class="form-control form-control-lg rounded-3"
                                    placeholder="Masukkan nama prodi"
                                    
                                >
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    Nama Kaprodi
                                </label>

                                <input 
                                    type="text"
                                    name="nama_kaprodi"
                                    class="form-control form-control-lg rounded-3"
                                    placeholder="Masukkan nama kaprodi"
                                    
                                >
                            </div>
                             <div class="mb-4">
                                <label class="form-label fw-semibold">
                                    pilih Prodi
                                </label>
                                <select name="alias_prodi" id="alias_prodi">
                                        <option value="SI">Sistem Informasi</option>
                                     <option value="IF">Informatika</option>
                                     <option value="MJ">Manajemen</option>
                                     <option value="AK">Akutansi</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="photo_kaprodi" class="form-label fw-semibold">
                                    Photo Kaprodi
                                </label>
                                <input 
                                    type="file"
                                    id="photo_kaprodi"
                                    name="photo_kaprodi"
                                    class="form-control"
                                    accept="image/*"
                                    placeholder="Pilih photo kaprodi"
                                >
                            </div>

                            <div class="d-grid">
                                <button 
                                    type="submit"
                                    class="btn btn-primary btn-lg rounded-3 shadow-sm"
                                >
                                     Simpan Data Prodi
                                </button>
                            </div>

                        </form>

                    </div>

                    <div class="card-footer text-center bg-light rounded-bottom-4">
                        <small class="text-muted">
                            Sistem Informasi Fakultas
                        </small>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-layout>