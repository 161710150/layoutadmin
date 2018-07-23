@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit Data Kelas 
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('kelas.update',$k->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kelas ke-</label>	
			  			<input type="text" name="nama_kelas" class="form-control" value="{{ $k->nama_kelas }}"  required>
			  			@if ($errors->has('nama_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_kelas') }}</strong>
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