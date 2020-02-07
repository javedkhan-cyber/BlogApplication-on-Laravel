@extends('layouts.app')
@section('content')


<div class="container">
	
	<div class="row">
		
		<div class="col-md-10">
			List Of Blog
		</div> 
		<div class="col-md-2">
			<a class="btn btn-sm btn-success" href="{{ route('blog.create')}}">Create New Blog</a>
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
				<th width="150px">Title</th>
				<th width="150px">Heading</th>
				
				<th >Description</th>
				<th width="180px">Action</th>
				

			</tr>
                   
                 @foreach($blog as $blogdata)
                    
                    <tr>
                    	<td><b>{{++$i}}</b></td>
                    	<td>{{$blogdata->title}}</td>
                    	<td>{{$blogdata->heading}}</td>
                    	<td>{{$blogdata->description}}</td>
                    	
                        <td>

                    	<form action="{{route('blog.destroy',$blogdata->id)}}" class="" method="post">

                    		<a class="btn btn-sm btn-success" href="{{route('blog.show',$blogdata->id)}}">Show</a>
                    			<a class="btn btn-sm btn-warning" href="{{route('blog.edit',$blogdata->id)}}">Edit</a>

                    			@csrf
                    			@method('DELETE')
                    			<button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    		
                          
                          </td>
                    	</form>

                    </tr>
                  
                 @endforeach

		</table>

		{!! $blog->links() !!}

</div>



@endsection