<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js">
    </script>
    <title>Tambah Data Pegawai</title>
    <script>
        jQuery(document).ready(function($) {
          //jQuery Functionality
          $('#example').DataTable();
          $(document).on('click', '#example tbody tr button', function() {
            $("#modaldata tbody tr").html("");
            $("#modaldata tbody tr").html($(this).closest("tr").html());
            $("#exampleModal").modal("show");
          });
        } );
    </script>
</head>

<body>
    <h1 class="text-center mb-4">Tambah Data barang</h1>
    <div class="input-group mb-2">
        <div class="container">
            <div class="row">
                <div class="card" style="max-height: 2852px">
                    <div class="panel-body"></div>
                    <div class="card-body">
                        <div class="modal-dialog">
                            <div class="modal-content">


                                <div class="modal-header">
                                    <div class="modal-body">


                                        <form action="/insertdata" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="inputnama_barang" class="form-label">Nama_Barang</label>
                                                <input type="text" name="Namabarang" class="form-control"
                                                    id="Namabarang" aria-describedby="inputnamabarang">
                                                <div id="inputbarang" class="form-text">Jangan dikosongkan untuk nama
                                                    barang
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_tanggal_Masuk" class="form-label">Tanggal Masuk</label>
                                                <input type="date" name="Tanggalmasuk" class="form-control" id="Tanggalmasuk"
                                                    aria-describedby="Tanggalmasuk">
                                                <div id="Tanggal" class="form-text">Jangan dikosongkan Tanggal Masuk
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="input_jumlah" class="form-label">Jumlah</label>
                                                <input type="text" name="Jumlah" class="form-control" id="Jumlah"
                                                    aria-describedby="Jumlah">
                                                <div id="alamat" class="form-text">Jangan dikosongkan untuk Jumlah barang
                                                </div>
                                            </div>
                                            <br>




                                            <button data-toggle="modal" type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>

</html>
