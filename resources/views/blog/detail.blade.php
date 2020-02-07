@extends('layouts.app')
@section('content')

<div class="container" style="text-align: center;" >
	<div class="row">
		<div class="col-md-12">
			<h3>Details</h3>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<strong>Title :</strong> {{$blog->title}}

			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<strong>Heading :</strong> {{$blog->heading}}
			</div>
		</div>
		
		

		<div class="col-md-12">
			<div class="form-group">
				<strong>Description :</strong> {{$blog->description}}
			</div>
		</div>

		<div class="col-md-12">
			<a href="{{route('blog.index')}}" class="btn btn-sm btn-primary">Back</a>
		</div>
		

</div>
</div>
@endsection

