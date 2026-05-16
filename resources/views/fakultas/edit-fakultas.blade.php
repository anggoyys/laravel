<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card untuk tampilan yang lebih terstruktur -->
                <div class="card shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold text-primary">Edit Fakultas</h5>
                    </div>
                    <div class="card-body p-4">      
                                            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                            @csrf
                            @method("PUT")

                            <!-- Nama Fakultas -->
                            <div class="mb-3">
                                <label for="nama_fakultas" class="form-label text-secondary">Nama Fakultas</label>
                                <input type="text" 
                                       name="nama_fakultas" 
                                       id="nama_fakultas"
                                       class="form-control form-control-lg" 
                                       placeholder="Contoh: Fakultas Teknik"
                                       value="{{ $fakultas->nama_fakultas }}"
                                       required>
                            </div>

                            <!-- Nama Dekan -->
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label text-secondary">Nama Dekan</label>
                                <input type="text" 
                                       name="nama_dekan" 
                                       id="nama_dekan" 
                                       class="form-control form-control-lg" 
                                       placeholder="Contoh: Dr. Nama Dekan"
                                       value="{{ $fakultas->nama_dekan }}"
                                       required>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Update Data</button>
                                <a href="/fakultas" class="btn btn-link text-decoration-none text-muted">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>