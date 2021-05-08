<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Halaman Admin</h1>
        <div class="row">
            <div class="col-12">

                @component('layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    @slot('judul')
                        Peringatan
                    @endslot
                    100 data mahasiswa perlu di perbaiki
                @endcomponent

                @component('layout.alert')
                    @slot('class')
                        danger
                    @endslot
                    @slot('judul')
                        Awas
                    @endslot
                    Hari ini deadline laporan perjalanan dinas!
                @endcomponent

            </div>
        </div>
    </div>

    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
