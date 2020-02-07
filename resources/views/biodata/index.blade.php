@extends('layouts.app')
@section('content')


<div class="container">
	
	<div class="row">
		
		<div class="col-md-10">
			List Of Biodatas
		</div> 
		<div class="col-md-2">
			<a class="btn btn-sm btn-success" href="{{ route('biodata.create')}}">Create New Biodata</a>
		</div>
	</div>


@if($message = Session::get('success'))

	<div class="alert alert-success">
		<p>{{$message}}</p>
	</div>

@endif


		<table class="table table-hover table-sm">
			<tr>
				<th width="30px">No.</th>
				<th width="150px">First Name</th>
				<th width="150px">Last Name</th>
				<th width="200px">Email</th>
				<th width="150px">Mobile</th>
				<th >About</th>
				<th width="180px">Action</th>
				

			</tr>
                   
                 @foreach($biodatas as $biodata)
                    
                    <tr>
                    	<td><b>{{++$i}}</b></td>
                    	<td>{{$biodata->fname}}</td>
                    	<td>{{$biodata->lname}}</td>
                    	<td>{{$biodata->email}}</td>
                    	<td>{{$biodata->mobile}}</td>
                    	<td>{{$biodata->text}}</td>
                        <td>

                    	<form action="{{route('biodata.destroy',$biodata->id)}}" class="" method="post">

                    		<a class="btn btn-sm btn-success" href="{{route('biodata.show',$biodata->id)}}">Show</a>
                    			<a class="btn btn-sm btn-warning" href="{{route('biodata.edit',$biodata->id)}}">Edit</a>

                    			@csrf
                    			@method('DELETE')
                    			<button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    		
                          
                          </td>
                    	</form>

                    </tr>
                  
                 @endforeach

		</table>

		{!! $biodatas->links() !!}

</div>



@endsection