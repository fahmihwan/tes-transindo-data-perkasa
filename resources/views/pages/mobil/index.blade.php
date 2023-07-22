@extends('components.main')

@section('container')
    <div class="container">
        <div class="mt-4 d-flex justify-content-between align-item-center mb-5">
            <h5>Mobil Saya</h5>
            <a href="/mobil/create" class="btn btn-primary">Tambah Mobil</a>
        </div>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">merek</th>
                        <th scope="col">model</th>
                        <th scope="col">nomor plat</th>
                        <th scope="col">tarif</th>
                        <th scope="col">pemilik</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $d)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $d->merek }}</td>
                            <td>{{ $d->model }}</td>
                            <td>{{ $d->nomor_plat }}</td>
                            <td>{{ $d->tarif }}</td>
                            <td>{{ $d->user->nama }}</td>
                            <td></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
