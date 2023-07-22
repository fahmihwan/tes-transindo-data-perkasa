@extends('components.main')

@section('container')
    <div class="container">
        <div class="mt-4 d-flex justify-content-between align-item-center mb-5">
            <h5>List mobil yang sedang di sewa</h5>
            {{-- <a href="/mobil/create" class="btn btn-primary">Tambah Mobil</a> --}}
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
                            <td>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#m-{{ $d->id }}">
                                    Sewa sekarang
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="m-{{ $d->id }}" tabindex="-1"
                                    aria-labelledby="m-{{ $d->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="m-{{ $d->id }}Label">Modal title
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/mobil/cek-mobil/{{ $d->id }}/sewa" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="tanggal_mulai" class="form-label">tanggal_mulai</label>
                                                        <input type="date" class="form-control" id="tanggal_mulai"
                                                            name="tanggal_mulai" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tanggal_selesai"
                                                            class="form-label">tanggal_selesai</label>
                                                        <input type="date" class="form-control" id="tanggal_selesai"
                                                            name="tanggal_selesai" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
