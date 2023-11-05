<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akar Kuadrat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #000">
        <div class="container-fluid">
          <a class="navbar-brand" style="color: #00cc99" href="{{ route('akar-kuadrat-index') }}">Back</a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <a class=" nav nav-link" href="{{ route('logout') }}">Logout</a>
          </div>
        </div>
    </nav>


    <div class="container text-center  ">
            <div class="row " style="display:flex; flex-direction:row; justify-content:center; align-items: center; color:white; margin-top:40px">
                <h2 class="mb-3 mt-10" style="text-align: center; font-weight: bold;">Tabel Hasil Perbandingan</h3>
            </div>

        <div class="row" style="margin-top:15px">
            <div class="col-sm-6">
                <table class="table table-bordered" style="text-align: center; height: 180px;">
                    <thead>
                        <tr>
                            <th style="font-size:1.2rem;">Data Tercepat (ms)</th>
                        </tr>
                    </thead>
                    <tbody >
                        <tr>
                            <td style="vertical-align: middle; font-size:1.8rem;">{{ $waktuTercepatDetik->waktu_tercepat_detik }}</td>
                        </tr>
                    </tbody>
                </table>
            </div> 

            <div class="col-sm-6">
                <table class="table table-bordered" style="text-align: center; height: 180px;">
                    <thead>
                        <tr>
                            <th style="font-size:1.2rem;">Data Terlama (ms)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="vertical-align: middle; font-size:1.8rem;">{{ $waktuTerlamaDetik->waktu_terlama_detik }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

          
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</body>
</html>
