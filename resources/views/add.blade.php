<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	
</head>
<body>
<div class="container">
	<h1>Add Form</h1>
	<form method="post" action="{{url('admin/user/store')}}">
		@csrf 
		<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label> Name</label>
						<input type="text" name="name" class="form-control">
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			 <button class="btn btn-success" name="submit">Submit</button>
		</div>
		</form>
</div>
</body>
</html>

