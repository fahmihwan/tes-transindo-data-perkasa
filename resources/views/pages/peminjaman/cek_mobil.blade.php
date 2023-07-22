@extends('components.main')

@section('container')
    <div class="container">
        <div class="mt-4 d-flex justify-content-between align-item-center mb-5">
            <h5>Tambah mobil saya</h5>
            <a href="/mobil" class="btn btn-primary">kembali</a>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Form Mobil</div>
                    <div class="card-body">
                        <form action="/peminjaman/cek-mobil" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tanggal_mulai" class="form-label">tanggal_mulai</label>
                                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_selesai" class="form-label">tanggal_selesai</label>
                                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai"
                                    required>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
