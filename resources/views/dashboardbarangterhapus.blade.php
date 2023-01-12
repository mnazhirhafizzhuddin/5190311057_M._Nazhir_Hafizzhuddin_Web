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
       <br><br />
        <div class="card">
            <div class="card-header">
                <div class="row">

                    <div class="rounded mx-auto d-block">
                        <table class="table table-bordered" style="table-layout:fixed">
                            <thead>

                                <tr>

                                    <th scope="col">Id log masuk </th>
                                    <th scope="col">Id barang</th>
                                    <th scope="col">Nama barang</th>
                                    <th scope="col">Status</th>


                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $nomor = 1;
                                @endphp
                                @foreach ($data as $row )
                                <tr>
                                    <th scope="row">{{$nomor++}}</th>
                                    <td>{{$row->idbarang}}</td>
                                    <td>{{$row->Namabarang}}</td>
                                    <td>{{$row->Status}}</td>

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
