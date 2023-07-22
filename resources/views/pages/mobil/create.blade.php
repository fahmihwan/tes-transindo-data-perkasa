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
                        <form action="/mobil" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="merek" class="form-label">merek</label>
                                <input type="text" class="form-control" id="merek" name="merek" required>
                            </div>
                            <div class="mb-3">
                                <label for="model" class="form-label">model</label>
                                <input type="text" class="form-control" id="model" name="model" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_plat" class="form-label">nomor_plat</label>
                                <input type="text" class="form-control" id="nomor_plat" name="nomor_plat"required>
                            </div>
                            <div class="mb-3">
                                <label for="tarif" class="form-label">tarif</label>
                                <input type="number" class="form-control" id="tarif" name="tarif" required>
                            </div>
                            <button class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
