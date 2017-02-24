@extends('layouts.app')

@section('content')
	
<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Jabatan</div>
		<div class="panel-body">
			<form method="POST" action="{{url('jabatan')}}">
			 	{{csrf_field()}}
				
                        <div class="form-group{{ $errors->has('kode_jabatan') ? ' has-error' : '' }}">
                            <label for="kode_jabatan" class="col-md-4 control-label">kode jabatan</label>

                            <div class="col-md-6">
                                <input id="kode_jabatan" type="text" class="form-control" name="kode_jabatan" value="{{ old('kode_jabatan') }}" required autofocus>

                                @if ($errors->has('kode_jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode_jabatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
                            <label for="nama_jabatan" class="col-md-4 control-label">nama jabatan</label>

                            <div class="col-md-6">
                                <input id="nama_jabatan" type="text" class="form-control" name="nama_jabatan" value="{{ old('nama_jabatan') }}" required autofocus>

                                @if ($errors->has('nama_jabatan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama_jabatan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


				 <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <label for="besaran_uang" class="col-md-4 control-label">besaran_uang</label>

                            <div class="col-md-6">
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}" required autofocus>

                                @if ($errors->has('besaran_uang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('besaran_uang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

				<div class="form-group">
					<input class="btn btn-success" type="submit" name="submit" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>

@stop