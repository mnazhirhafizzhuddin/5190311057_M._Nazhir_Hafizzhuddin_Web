<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Edit Data Barang</title>
</head>

<body>
    <h1 class="text-center mb-4">EditData Barang</h1>
    <div class="input-group mb-2">
        <div class="container">
            <div class="row">
                <div class="card"style="max-height: 2852px">
                    <div class="card-body" >
                        <form action="/updatedatabarang/{{$data->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="inputnamabarang" class="form-label">Nama_barang</label>
                                <input type="text" name="Namabarang" class="form-control" id="Namabarang" aria-describedby="inputnamabarang"
                                value="{{$data->Namabarang}}">
                                <div id="inputkaryawan" class="form-text">Jangan dikosongkan untuk nama barang </div>
                            </div>
                            <div class="mb-3">
                                <label for="InputTanggalmasuk" class="form-label">Tanggalmasuk</label>
                                <input type="date" name="Tanggalmasuk" class="form-control" id="Tanggalmasuk" aria-describedby="Tanggalmasuk"
                                value="{{$data->Tanggalmasuk}}" disabled>
                                <div id="alamat" class="form-text">Jangan dikosongkan untuk Tanggal masuk </div>
                            </div>


                            <br>

                            <script>
                                $('#demolist li').on('click', function() {
                                    $('#datebox').val($(this).text());
                                });
                            </script>
                            <br>
                            <div class="mb-3">
                                <label for="inputjumlah" class="form-label">jumlah</label>
                                <input type="text" name="jumlah" class="form-control" id="jumlah" aria-describedby="alamat" value="{{$data->Jumlah}}">
                                <div id="jumlah" class="form-text">Jangan dikosongkan untuk jumlahbarang </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>

</html>
