@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data Kelas
			  	<div class="card-title pull-right"><a href="{{ route('kelas.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="card-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Kelas</th>
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($k as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_kelas }}</td>
						<td>
					<a class="btn btn-warning" href="{{ route('kelas.edit',$data->id) }}">Edit</a>
				</td>
				<td>
				<form method="post" action="{{ route('kelas.destroy',$data->id) }}">
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