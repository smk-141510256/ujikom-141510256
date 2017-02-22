@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row-fluid">
    <div class=""span2>
        </div>
    </div>

        <div class="panel panel-info">
        <div class="panel-heading"><h1><center><strong>Data Tunjangan</h1></strong></div>
        <div class="panel-body">
            
                <form class="form-search" >
                    <p class="text-right">
                    <input type="text" class="input-medium search-query">
                    <button type="submit" class="btn">Search</button>
                </p></form>
        <a class="btn btn-success" href="{{url('tunjangan/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Id</th>
                        <th>Kode Tunjangan</th>
                        <th>Nama Jabatan</th>
                        <th>Nama Golongan</th>
                        <th>Status</th>
                        <th>Jumlah Anak</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($tunjangan as $data)
                <tbody>
                    <tr> 
                        <td>{{$id++}}</td>
                        <td>{{$data->kode_tunjangan}}</td>
                        <td>{{$data->jabatan->nama_jabatan}}</td>
                        <td>{{$data->golongan->nama_golongan}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->jumlah_anak}}</td>
                        <td>{{$data->besaran_uang}}</td>
                        <td><a href="{{route('tunjangan.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td ><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        @include('modals.delete', ['url' => route('tunjangan.destroy', $data->id),'model' => $data])
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection