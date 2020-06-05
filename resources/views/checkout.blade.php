<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">
<div class="col-lg-offset-4 col-lg-4">
<form action="{{ url('/createRequest') }}" method="post">
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
{{ csrf_field() }}
<input type="text" class="form-control" name="purpose" value="insurance">
<input type="text" class="form-control" name="amount"value="100000">
<input type="text" class="form-control" name="phone"value="8210731080">
<input type="text" class="form-control" name="username"value="ranjan">
<input type="text" class="form-control" name="email"value="mnnit4abhishek@gmail.com">
<input type="submit">

</form>
</div>
</div>
</body>
</html>
