<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>

	<title>Document</title>
</head>
<body>
	<form action="" id="formdk">
		<input type="email" placeholder="Nhập email" name="email"><br>
		<input type="password" placeholder="Nhập Mật khẩu" name="password"><br>
		<input type="password" placeholder="Nhập lại Mật khẩu" name="re-password"><br>
		<input type="text" placeholder="Nhập tên" name="name"><br>
		<input type="submit" value="Đăng kí"><br>
	</form>
	<script type="text/javascript">
		$().ready(function() {
	$("#formdk").validate({
		onfocusout: true,
		onkeyup: true,
		onclick: false,
		rules: {
			"email": {
				required: true,
				maxlength: 15
			},
			"password": {
				required: true,
				minlength: 8
			},

			"re-password": {
				equalTo: "#password",
				minlength: 8
			},
			"name":{
				required:true,
				number:true
			}
		},
		messages: {
			"email": {
				required: "Bắt buộc nhập username",
				maxlength: "Hãy nhập tối đa 15 ký tự"
			},
			"password": {
				required: "Bắt buộc nhập password",
				minlength: "Hãy nhập ít nhất 8 ký tự"
			},
			"re-password": {
				equalTo: "Hai password phải giống nhau",
				minlength: "Hãy nhập ít nhất 8 ký tự"
			}
		}	
	});
});
	</script>
</body>
</html>