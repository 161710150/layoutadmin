@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit Data siswa 
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('siswa.update',$s->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
			  			<label class="control-label">NIS</label>	
			  			<input type="number" name="nis" class="form-control" value="{{ $s->nis }}"  required>
			  			@if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="name" class="form-control" value="{{ $s->user->name }}"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label><br>
			  			<input type="radio" class="flat" name="jenis_kelamin" value="laki-laki" {{ $s->jenis_kelamin == 'laki-laki' ? 'checked':'' }}> Laki-laki
			  			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						<input type="radio" class="flat" name="jenis_kelamin" value="perempuan" {{ $s->jenis_kelamin == 'perempuan' ? 'checked':'' }}> Perempuan
			  			@if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control" value="{{ $s->agama }}"  required>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" required>{{ $s->alamat }}
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                        </textarea>
			  		</div>
			  		<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<select name="id_kelas" class="form-control">
			  			@foreach($k as $data)
			  			<option value="{{ $data->id }}" {{ $selected == $data->id ? 'selected="selected"' : '' }}>
			  				{{ $data->nama_kelas }}</option>
			  			@endforeach
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('id_jurusan') ? ' has-error' : '' }}">
			  			<label class="control-label">Jurusan</label>	
			  			<select name="id_jurusan" class="form-control">
			  			@foreach($j as $data)
			  			<option value="{{ $data->id }}" {{ $selected1 == $data->id ? 'selected="selected"' : '' }}>
			  				{{ $data->nama_jurusan }}</option>
			  			@endforeach
			  			</select>
			  			@if ($errors->has('id_jurusan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jurusan') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label for="email" class="control-label">Email Siswa</label>	
			  			<input id="email" type="email" name="email" class="form-control" value="{{ $s->user->email }}"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label for="password" class="control-label">Password Siswa</label>	
			  			<input id="password" type="password" name="password" class="form-control" value="{{ $s->user->password }}"  required>
			  			@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<label for="password-confirm" class="control-label"> Confirm Password</label>
	  				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $s->user->password }}">
			  		</div>
                    <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Foto</label>
                                @if (isset($s) && $s->gambar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('assets/image/fotosiswa/'.$s->gambar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="gambar" type="file" value="{{ $s->gambar }}">
                    </div>        
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">SAVE</button>
			  			<a class="btn btn-primary" href="{{ route('siswa.index') }}"><font color="white">BACK</font></a>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection