
<div class="modal text-left fade" id="delete{{ $model->id }}">
	<div class="modal-dialog">
		<div class= "bg-danger">
			{!! Form::open(['method' => 'delete', 'url' => $url]) !!}
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="bg-primary">{{{ $title or "Hapus Data" }}}</h4>
			</div>
			<div class="bg-danger">
				<p>
					{{ $message or "Apakah anda yakin ingin menghapus data ini?" }}
				</p>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger">Ya</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Tidak</button>
			</div>
			{!! Form::close() !!}
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->