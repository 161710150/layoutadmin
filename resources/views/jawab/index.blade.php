@extends('layouts.admin')
@section('content')
<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
			  <div class="card-header">Data Jawab
			  	<div class="card-title pull-right"><a href="{{ route('jawab.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table table-bordered">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
						<th>Pertanyaan</th>
						<th>Jawaban</th>
						
						
					  <th colspan="2">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($jawab as $data)
				  	  <tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data->datapertanyaan->pertanyaan }}</td>
				    	<td>{{ $data->jawaban }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('jawab.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<form method="post" action="{{ route('jawab.destroy',$data->id) }}">
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