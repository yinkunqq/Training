<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="test" method="post" enctype="multipart/form-data">
        
        {{csrf_field()}}
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"/> -->
		<input type="text" name="title">
		<input type="file" name="photo">
		<input type="submit" value="提交">
	</form>
</body>
</html>