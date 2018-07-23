@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data Siswa
			  	<div class="card-title pull-right"><a href="{{ route('siswa.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>NIS</th>
					  <th>Nama Lengkap</th>
					  <th>Jenis Kelamin</th>
					  <th>Agama</th>
					  <th>Alamat</th>
					  <th>Kelas</th>
					  <th>Jurusan</th>
					  <th>Email</th>
					  <th>Foto</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($s as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nis }}</td>
				    	<td>{{ $data->user->name }}</td>
				    	<td>{{ $data->jenis_kelamin }}</td>
				    	<td>{{ $data->agama }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->kelas->nama_kelas }}</td>
				    	<td>{{ $data->jurusan->nama_jurusan }}</td>
				    	<td>{{ $data->user->email }}</td>
				    	<td><img src="{{asset('/assets/image/fotosiswa/'.$data->gambar.'')}}" width="70" height="70"></td>
						<td>
					<a class="btn btn-warning" href="{{ route('siswa.edit',$data->id) }}">Edit</a>
				</td>
				<td>
				<form method="post" action="{{ route('siswa.destroy',$data->id) }}">
				<input name="_token" type="hidden" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">

				<button type="submit" class="btn btn-danger" class="btn btn-primary" onclick="return confirm('Are you sure to delete?')">Delete</button>
						</form>
				</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection