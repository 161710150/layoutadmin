@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Tambah Data Siswa 
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
			  			<label class="control-label">NIS</label>	
			  			<input type="number" name="nis" class="form-control"  required>
			  			@if ($errors->has('nis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nis') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Siswa</label>	
			  			<input type="text" name="name" class="form-control"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
			  			<label class="control-label">Jenis Kelamin</label><br>
			  			<input type="radio" name="jenis_kelamin" id="inlineRadio1" value="laki-laki"> Laki-laki
			  			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			  			<input type="radio" name="jenis_kelamin" id="inlineRadio2" value="perempuan"> Perempuan
			  			@if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('agama') ? ' has-error' : '' }}">
			  			<label class="control-label">Agama</label>	
			  			<input type="text" name="agama" class="form-control"  required>
			  			@if ($errors->has('agama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('agama') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat</label>	
			  			<textarea name="alamat" class="form-control" required>
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </textarea>
			  		</div>
					    	<div class="form-group {{ $errors->has('id_kelas') ? 'has-error' : '' }}">
								<label class="control-label">Kelas</label>
								<select class="form-control" name="id_kelas" required>
									<option>---</option>
										@foreach($k as $data)
										<option value="{{ $data->id }}">
											{{ $data->nama_kelas }}
										</option>
										@endforeach
									</option>
								</select>
								@if ($errors->has('id_kelas'))
									<span class="help-block">
										<strong>{{ $errors->first('id_kelas') }}</strong>
									</span>
								@endif
						</div>
						<div class="form-group {{ $errors->has('id_jurusan') ? 'has-error' : '' }}">
								<label class="control-label">jurusan</label>
								<select class="form-control" name="id_jurusan" required>
									<option>---</option>
										@foreach($j as $data)
										<option value="{{ $data->id }}">
											{{ $data->nama_jurusan }}
										</option>
										@endforeach
									</option>
								</select>
								@if ($errors->has('id_jurusan'))
									<span class="help-block">
										<strong>{{ $errors->first('id_jurusan') }}</strong>
									</span>
								@endif
							</div>
							<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email Siswa</label>	
			  			<input id="email" type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label for="password" class="control-label">Password Siswa</label>	
			  			<input id="password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
			  		</div>
			  		<div class="form-group">
			  			<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>	
			  			
			  			<div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
			  		<div class="form-group">
                                <p><label for="cc-payment" class="control-label mb-1">Foto</label></p>
                                <input name="gambar" type="file" required>
                            </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  			<a class="btn btn-primary" href="{{ url()->previous() }}"><font color="white">BACK</font></a>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection