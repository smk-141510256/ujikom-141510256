@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row-fluid">
    <div class=""span2>
        </div>
    </div>
 <body style="background:#FF6699">
        <div class="bg-danger">
        <div class="text-danger"><h1><center><strong>Data Pegawai</h1></strong></div>
        <div class="panel-body">
            
                
         <a class="btn btn-primary" href="{{url('pegawai/create')}}">Tambah Data</a
        ><br><br><a class="btn btn-danger" href="{{url('pegawai')}}"><=Back</a><br><br>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-warning">
                        <th>Id</th>
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th>Golongan</th>
                        <th>Photo</th>
                        <th colspan="3">Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($pegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->nip}} </td>
                        <td> {{$data->User->name}} </td>
                        <td> {{$data->User->email}} </td>
                        <td> {{$data->jabatan->nama_jabatan}} </td>
                        <td> {{$data->golongan->nama_golongan}} </td>
                        <td><img src="{{asset('/assets/image/'.$data->foto.'')}}" height="100px" width="100px"></td>
                        <td><a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td ><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        @include('modals.delete', ['url' => route('pegawai.destroy', $data->id),'model' => $data])
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
             <div class="form-group"><center>
        <form action="{{url('pegawai')}}/?nip=nip">
        <input type="text" name="nip" placeholder="Cari"></form>
        </div>
        </div>
    </div>
</div>

@endsection