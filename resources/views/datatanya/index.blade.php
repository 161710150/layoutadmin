@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data Pertanyaan
			  	<div class="card-title pull-right"><a href="{{ route('datatanya.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
						<th>Siswa</th>
						<th>Kelas</th>
						<th>Jurusan</th>
						<th>Pertanyaan</th>						
						<th>Tanggal</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($dtanya as $data)
				  	  <tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data->datasiswa->user->name }}</td>
				    	<td>{{ $data->datasiswa->kelas->nama_kelas }}</td>					
							<td>{{ $data->datasiswa->jurusan->nama_jurusan }}</td>
							<td>{{ $data->pertanyaan }}</td>
							<td>{{ $data->created_at }}</td>

<td>
	<a class="btn btn-warning" href="{{ route('jawab.create',$data->id) }}">Jawab</a>
</td>
<td>
	<form method="post" action="{{ route('datatanya.destroy',$data->id) }}">
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