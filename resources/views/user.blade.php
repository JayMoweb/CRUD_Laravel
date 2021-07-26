	 
<!DOCTYPE html>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<h1>Show Data</h1>
		<table class="table table-striped">
			<form method="post" action="{{url('admin/user/search')}}">
				@csrf
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-11">
							<div class="form-group">
								<input type="text" name="search" value="@if(isset($keyword) && $keyword != null) {{$keyword}} @endif" placeholder="search" autocomplete="off">&nbsp;
								<button><span><i class="fa fa-search"></i></span></button>
							</div>
						</div>
						<div class="col-md-1">
							<button class="btn btn-sucees"><a href="{{url('/admin/user/add')}}">Add</a></button>
						</div>
					</div>
				</div>
			</form>
			<tr>
				<td>Name</td>
				<td>Email</td>
				<td>Edit</td>
				<td>Delete</td>
			</tr>
			@foreach($users as $user) 
			@if($user->deleted_at == null)
			<tr>	
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
					<button class="btn btn-success"><a href="{{url('admin/user/edit/'.$user->id)}}" style="color: white">Edit</a></button>
				</td>
				<td>
					<button class="btn btn-info"><a href="{{url('admin/user/delete/'.$user->id)}}" style="color: white" onclick="return confirm('Are you sure?')" 	>Delete</a></button>
				</td>
			</tr>
			@endif
			@endforeach
		</table>
		{{$users->render()}}
	</div>
</body>
</html>