

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
	<link href="/css/app.css" rel="stylesheet">

	<title>Авторизация</title>
</head>
<body>
	<div id="myProfile" class="sidenav">
		<a href="/" id="about">Назад</a>
	</div>
	 <form action= "{{ route ( 'user.login') }}" method="post" style="border:1px solid #ccc">
	  <div class="container">
	    <h1>Авторизация</h1>
	    <p>Пожалуйста, заполните эту форму, если у вас есть учетную запись</p>
	    <hr>
			@csrf
			<div class = "regis">
		    <label for="email"><b>Email</b></label>
		    <input type="email" placeholder="Введите email" name="email" required>
				@error('email')
				@enderror
		    <label for="psw"><b>Пароль</b></label>
		    <input type="password" placeholder="Введите пароль" name="password" required >
				@error('password')
				@enderror
		</div>

	     <p><a href="#" style="color:dodgerblue">Условия и конфиденциальность</a>.</p>

	    <div class="clearfix">
	      	<button type="submit" class="signupbtn">Авторизироваться</button>
	    </div>
	  </div>

		<?php
		// $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		// $check = $_GET['check'];
		// if ($check == 0){	}
		// else{
		// 	echo "<p align = 'center'>Авторизация прошла не успешно, попробуйте еще раз!!!</p>";
		// }

		?>
	</form>
</body>
</html>
