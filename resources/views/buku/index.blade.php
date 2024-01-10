<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEMPROGRAMAN INTERNET</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Shadows Into Light', cursive; /* Menggunakan font Poppins yang telah diunduh */
            margin: 20px;
            background-color: #FFDAB9;
            
        }

        .container {
            max-width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: white; /* Warna latar belakang tabel */
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-add {
            margin-bottom: 20px;
            background-color: rgb(209, 23, 54); 
            border: none;
        }
        h2 {
            color: black; /* Warna teks yang cerah dan ceria */
            font-size: 36px; /* Ukuran font yang lebih besar */
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BukuKita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Formulir Pencarian -->
            <form class="d-flex ms-auto" action="{{url('buku')}}" method="GET">
                <input class="form-control me-2" type="search" placeholder="Cari buku..." aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <br></br>
        <h2 class="text-center">BUKU KITA BERSAMA</h2>


        <!-- Table to display books -->
        <table class="table" id="bookTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>ISBN</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = $data->firstItem()?>
                @foreach ($data as $item)
                <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->judul}}</td>
                    <td>{{$item->penulis}}</td>
                    <td>{{$item->tahun}}</td>
                    <td>{{$item->isbn}}</td>
                    <td>
                        <a href="{{url('buku/'.$item->id.'/edit')}}" class="btn btn-Warning btn-sm">Edit</a>
                        <form onsubmit="return confirm('Yakin ingin menghapus data?')" class="d-inline" action="{{url('buku/'.$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php $no++ ?>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#addModal">
            <a class="text-light" href="{{url('buku/create')}}">Tambah</a></button>
    </div>


    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- JavaScript code to handle CRUD operations -->
    <script>
        // JavaScript code (sama seperti sebelumnya)
    </script>

    
</body>
</html>
