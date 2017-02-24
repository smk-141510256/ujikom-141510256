@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row-fluid">
    <div class=""span2>
        </div>
    </div>
     <body style="background:#FF6699">

        <div class="bg-danger">
        <div class="text-danger"><h1><center><strong>Data Tunjangan</h1></strong></div>
        <div class="panel-body">
        <a class="btn btn-primary" href="{{url('tunjangan/create')}}">Tambah Data</a
        ><br><br><a class="btn btn-danger" href="{{url('tunjangan')}}"><=Back</a><br><br>            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-warning">
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
                      <div class="form-group"><center>
        <form action="{{url('tunjangan')}}/?kode_tunjangan=kode_tunjangan">
        <input type="text" name="kode_tunjangan" placeholder="Cari"></form>
        </div>
        </div>
    </div>
</div>

@endsection