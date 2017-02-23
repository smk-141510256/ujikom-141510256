@extends('layouts.app')

@section('content')
  
<div class="container-fluid">
    <div class="row-fluid">
    <div class=""span2>
        </div>
    </div>
<body style="background:#FF6699">
        <div class="bg-danger">
        <div class="text-danger"><h1><center><strong>Data Kategori Lembur</h1></strong></div>
        <div class="panel-body">
            
                
        <a class="btn btn-success" href="{{url('kategori/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">

                <thead>
                    <tr class="bg-warning">
                    <span style="color:#80BFFF">
                        <th>Id</th>
                        <th>Kode Lembur</th>
                        <th>Nama Jabatan</th>
                        <th>Nama Golongan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                        </center>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($kategori as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_lembur}} </td>
                        <td> {{$data->jabatan->nama_jabatan}}</td>
                        <td> {{$data->golongan->nama_golongan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                        <td><a href="{{route('kategori.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td ><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        @include('modals.delete', ['url' => route('kategori.destroy', $data->id),'model' => $data])
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <div class="form-group"><center>
        <form action="{{url('kategori')}}/?kode_lembur=kode_lembur">
        <input type="text" name="kode_lembur" placeholder="Cari"></form>
        </div>
    </div>
</div>

@endsection