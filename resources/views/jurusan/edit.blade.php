@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit Data Jurusan
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('jurusan.update',$j->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jurusan ke-</label>	
			  			<input type="text" name="nama_jurusan" class="form-control" value="{{ $j->nama_jurusan }}"  required>
			  			@if ($errors->has('nama_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">SAVE</button>
			  			<a class="btn btn-primary" href="{{ url()->previous() }}"><font color="white">BACK</font></a>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection