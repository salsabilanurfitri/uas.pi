<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Shadows Into Light', cursive; /* Menggunakan font Poppins yang telah diunduh */
            margin: 20px;
            background-color: #FFDAB9;
            
        }
        .btn-add {
            margin-bottom: 20px;
            background-color: rgb(209, 23, 54); 
            border: none;
        }
    </style>
</head>
<body class="container mt-5">

    <h2 class="mb-4">Tambah Buku</h2>
    @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                    @endforeach
    <form action="{{url('buku')}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="title">Judul:</label>
            <input type="text" class="form-control" name="judul" id="title" required value="{{$data->judul}}">
        </div>

        <div class="form-group">
            <label for="author">Penulis:</label>
            <input type="text" class="form-control" name="penulis" id="author" required value="{{$data->penulis}}">
        </div>

        <div class="form-group">
            <label for="year">Tahun Terbit:</label>
            <input type="text" class="form-control" name="tahun" id="year" required value="{{$data->tahun}}">
        </div>

        <div class="form-group">
            <label for="isbn">ISBN:</label>
            <input type="text" class="form-control" name="isbn" id="isbn" required value="{{$data->isbn}}">
        </div>

        <button type="submit" class="btn btn-primary btn-add" name="simpan">Simpan</button>
    </form>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
