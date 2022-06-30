<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input</title>

    <!-- Bottstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    
    <!-- Form -->
    <form action="aksi.php" method="POST">
        <div class="container">

        <!-- Title -->
        <h1>Form Pengujian</h1>

        <!-- Input Id -->
        <div class="mb-3">
            <label for="id_user" class="form-label">ID</label>
            <input type="text" name="id_user" class="form-control" id="id_user" placeholder="123">
        </div>
        
        <!-- Input nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Toni">
        </div>

        <!-- Button Enkripsi -->
        <button type="submit" class="btn btn-primary" name="enkripsi">Enkripsi</button>

        <!-- Button Dekripsi -->
        <button type="submit" class="btn btn-success" name="dekripsi">Dekripsi</button>
    </div>
    </form>
    
</body>
</html>