<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Persewaan Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="card p-3" style="width: 400px">
            <h4 class="text-center">Register</h4>
            <form action="/register" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input required type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">alamat</label>
                            <input required type="text" class="form-control" name="alamat" id="alamat"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">telp</label>
                            <input required type="text" class="form-control" name="telp" id="telp"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="no_sim" class="form-label">no sim</label>
                            <input required type="text" class="form-control" name="no_sim" id="no_sim"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">username</label>
                            <input required type="text" class="form-control" name="username" id="username"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input required type="password" class="form-control" name="password"
                                id="exampleInputPassword1">
                        </div>
                    </div>
                </div>


                <div class="d-flex">
                    <button type="submit" class="btn btn-primary me-3" style="width: 50%">Daftar</button>
                    <a href="/" class="btn btn-warning" style="width: 50%">kembali</a>
                </div>
            </form>
            <p class="text-danger text-center pt-4">username atau password salah</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
