@extends('dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="container">
        <a href="/TambahData"><button style="color: rgb(249, 249, 248)" class=" btn-danger"><i type="button"
                    class="fa-sharp fa-solid fa-plus">Tam bah Data</i></button></a>
        <br><br />
        <div class="card">
            <div class="card-header">
                <div class="row">
                    @if ($message = Session::get('Succes'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <div class="rounded mx-auto d-block">
                        <table class="table table-bordered" style="table-layout:fixed">
                            <thead>

                                <tr>
                                    <th scope="col">Nomor</th>
                                    <th scope="col">ID Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $nomor = 1;
                                @endphp
                                @foreach ($data as $row )
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>{{$row->Namabarang}}</td>
                                    <td>{{$row->Tanggalmasuk}}</td>
                                    <td>{{$row->Jumlah}}</td>
                                     <td>

                                        <a href="/tampildatabarang/{{$row->id}}"><i style="color: rgb(8, 12, 214)"
                                                type="button" class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="/deletedatabarang/{{$row->id}}"><i style="color: rgb(254, 9, 9)"
                                                type="button" class="fa-solid fa-trash"></i></a>

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>

                        </table>
                        {{-- {{ $data->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
