@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Edit Data Pegawai
			  </div>
			  <div class="card-body">
			  	<form action="{{ route('datapegawai.update',$dp->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Pegawai</label>	
			  			<input type="text" name="name" class="form-control" value="{{ $dp->user->name }}"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label for="email" class="control-label">Email Pegawai</label>	
			  			<input id="email" type="email" name="email" class="form-control" value="{{ $dp->user->email }}"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label for="password" class="control-label">Password Pegawai</label>	
			  			<input id="password" type="password" name="password" class="form-control" value="{{ $dp->user->password }}"  required>
			  			@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<label for="password-confirm" class="control-label"> Confirm Password</label>
	  				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $dp->user->password }}">
			  		</div>
			  		<div class="form-group {{ $errors->has('nipd') ? ' has-error' : '' }}">
			  			<label class="control-label">NIPD Pegawai</label>	
			  			<input type="text" nipd="nipd" class="form-control" value="{{ $dp->nipd }}"  required>
			  			@if ($errors->has('nipd'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nipd') }}</strong>
                            </span>
                        @endif
			  		</div>
					<div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Foto</label>
            			@if (isset($dp) && $dp->gambar)<p>
        				<br>
		            <img src="{{ asset('assets/image/fotoadmin/'.$dp->gambar) }}" style="width:250px; height:250px;" alt="">
		               </p>                                
		               @endif
     					<input name="gambar" type="file" value="{{ $dp->gambar }}">
                    </div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">SAVE</button>
			  			<a class="btn btn-primary" href="{{ route('datapegawai.index') }}"><font color="white">BACK</font></a>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection