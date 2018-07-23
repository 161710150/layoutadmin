@extends('layouts.admin')
@section('content')
<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data Pertanyaan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('datatanya.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
			  			<label class="control-label">Siswa</label>	
			  			<select name="id_siswa" class="form-control">
						  <option>---</option>
							@foreach($s as $data)
			  				<option value="{{ $data->id }}">{{ $data->user->name }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_siswa'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswa') }}</strong>
                            </span>
                        @endif
			  		</div>  
			  		<div class="form-group {{ $errors->has('pertanyaan') ? ' has-error' : '' }}">
			  			<label class="control-label">Pertanyaan</label>	
			  			<input type="text" name="pertanyaan" class="form-control"  required>
			  			@if ($errors->has('pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pertanyaan') }}</strong>
                            </span>
                        @endif
                    </div>  
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection