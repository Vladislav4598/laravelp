<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
	<link href="/css/app.css" rel="stylesheet">
	<title>Регистрация</title>
</head>
<body>
	<div id="myProfile" class="sidenav">
		<a href="/" id="about">Назад</a>
	</div>
	 <form action= "{{ route ( 'user.registration') }}" method="post" style="border:1px solid #ccc">
	  <div class="container">
	    <h1>Регистрация</h1>
	    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись</p>
	    <hr>
			@csrf
			<div class = "regis">
		    <label for="name"><b>Имя</b></label>
		    <input type="text" placeholder="Введите имя" name="name" maxlength="25" required>

		    <label for="sumname"><b>Фамилия</b></label>
		    <input type="text" placeholder="Введите фамилия" name="sumname" maxlength="25"  required>

		    <label for="email"><b>Email</b></label>
		    <input type="email" placeholder="Введите email" name="email" maxlength="255" required >
				@error('email')
				@enderror

		    <label for="psw"><b>Пароль</b></label>
		    <input type="password" placeholder="Введите пароль" name="password" required>
				@error('password')
				@enderror

		    <!-- <label for="psw-repeat"><b>Повторить пароль</b></label>
		    <input type="password" placeholder="Повторите пароль" name="psw_repeat" required> -->
<?php
/*
pattern="/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i"
*/
?>
			</div>

	    <p>Создавая учетную запись, вы соглашаетесь с нашими  <a href="#" style="color:dodgerblue">условиями и конфиденциальностью</a>.</p>

	    <div class="clearfix">
	      	<button type="submit" class="signupbtn">Регистрация</button>
	    </div>
	  </div>

		<?php
		// $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		// $check = $_GET['check'];
		// if ($check == 0){	}
		// else{
		// 	echo "<p align = 'center'>Регистрация прошла не успешно, попробуйте еще раз!!!</p>";
		// }
		//
		?>
	</form>
</body>
</html>
