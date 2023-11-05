<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan API dan PL-SQL</title>
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

        <div class="row " style="display:flex; flex-direction:row; justify-content:center; align-items: center; color:white; margin-top:30px">
            <h2 class="mb-3 mt-10" style="text-align: center; font-weight: bold;">Tabel User</h3>
        </div>
 
                <div class="container">
                        <table class="table table-bordered mt-3">
                            <thead class="table">
                                <tr style="font-size: 1.4rem">
                                    <!-- <th scope="col">Num</th> -->
                                    <th>No</th>
                                    <th>Angka</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hasil_akar as $item)
                            <tr style="font-size: 1.3rem">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->api_clicks}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{-- <a class="navbar-brand" style="color: #00cc99" href="#">API</a> --}}
                        <a class="navbar-brand" style="color: #00cc99" href="{{ route('bandingkan-waktuPLSQL') }}">PL-SQL</a>              
                </div>



                {{-- <h1>Click Counter</h1>
                <p>Jumlah Klik Anda: {{ auth()->user()->click_count }}</p>
                <form method="POST" action="{{ route('increment-click') }}">
                    @csrf
                    <button type="submit">Klik</button>
                </form> --}}


               
        {{-- <div class="table-container">
            <h3 style="text-align: center; margin-top: 40px; color: white;" >Tabel Hasil API</h2>
            <table class="table table-bordered" style="text-align: center">
                <thead>
                    <tr>
                        <th>Input Angka</th>
                        <th>Hasil API</th>
                        <th>Waktu Eksekusi API (ms)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $inputAPI }}</td> <!-- Menampilkan angka inputan API -->
                        <td>{{ $angkaAPI }}</td>
                        <td>{{ $waktuEksekusiAPI }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-container">
            <h3 style="text-align: center; margin-top: 40px; color: white;">Tabel Hasil PLSQL</h2>
            <table class="table table-bordered" style="text-align: center" >
                <thead>
                    <tr>
                        <th>Input Angka</th>
                        <th>Hasil PL-SQL</th>
                        <th>Waktu Eksekusi PL-SQL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $inputPLSQL }}</td> <!-- Menampilkan angka inputan PLSQL -->
                        <td>{{ $angkaPLSQL }}</td>
                        <td>{{ $waktuEksekusiPLSQL }}</td>
                    </tr>
                </tbody>
            </table>
            <p>Waktu Terlama PL-SQL: {{ $waktuTerlamaPLSQL }} ms</p>
            <p>Waktu Tercepat PL-SQL: {{ $waktuTercepatPLSQL }} ms</p>
        </div>
        <div style="text-align: center;">
            <a class="btn button" href="{{ route('akar-kuadrat-index') }}">Back</a>
        </div>        
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    
</body>
</html>
