@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row-fluid">
    <div class=""span2>
        </div>
    </div>
      <body style="background:#FF6699">

        <div class="bg-danger">
        <div class="text-danger"><h1><center><strong>Data Golongan</h1></strong></div>
        <div class="panel-body">
            
             

        <a class="btn btn-success" href="{{url('golongan/create')}}">Tambah Data</a><br><br>
            <table class="table table-striped table-bordered table-hover">

                <thead>


                    <tr class="bg-warning">
                        <th>Id</th>
                        <th>Kode Golongan</th>
                        <th>Nama Golongan</th>
                        <th>Besaran Uang</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($golongan as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}} </td>
                        <td> {{$data->kode_golongan}} </td>
                        <td> {{$data->nama_golongan}}</td>
                        <td> Rp.{{$data->besaran_uang}}</td>
                        <td><a href="{{route('golongan.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td ><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                        @include('modals.delete', ['url' => route('golongan.destroy', $data->id),'model' => $data])
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>

                <form class="form-search" >
                    <p class="text-right">
                    <input type="text" class="input-medium search-query">
                    <button type="submit" class="bg-danger">Search</button>
                </p></form>
                
        </div>
    </div>
</div>


@endsection