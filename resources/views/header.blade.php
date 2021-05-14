<!DOCTYPE html>
<html>
<head>
	<title>Управляй проектами</title>
	<link href="/css/app.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
</head>
<script src="/js/app.js"></script>
<body>

<div id="mySidenav" class="menu">
				  <a href="javascript:void(0)" class="close" onclick="closeNav()">×</a>
				  <a href="/project">Главная</a>
				  <!-- <a href="/profile">Профиль</a> -->
				  <a href="/new">Новости</a>
				  <a href="/help">Помощь</a>
				  <a href="#">О Сайте</a>
			</div>
		<div id="wrap" >


		<div class="block0">
			<div class="block01">
				<ul>
					<li><span style="cursor:pointer" onclick="openNav()"> ☰ Меню</span></li>
				</ul>
			</div>

		<div class="block02">
			<ul>
				<div class="autocomplete">

						<li><input id="myInput" type="text" maxlength="70" name="myCountry" onfocus="this.value=''"  size="30%" placeholder="Ищи людей" required name="userseach" autocomplete="off"></li>
							</div>
						<li><input type="submit" value="Добавить" size="50%" onclick="checkUsersSeach()"></li>

			</ul>
		</div>
		<script type="text/javascript">

			function checkUsersSeach(){



				let userSeach = document.getElementById("myInput").value;
				var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;
    			if (re.test(userSeach)) document.getElementById('id014').style.display='block';
    			else alert ("Неправильно введен электронный адрес пользователя");

				/*onclick="document.getElementById('id014').style.display='block'"**/
			}


		</script>


			<?php

			/*
			$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			// echo $url;
			if ($url == 'http://localhost/project'){
							?>
							<div class="block02">
								<ul>
									<div class="autocomplete">
										<li><input id="myInput" type="text" maxlength="70" name="myCountry" onfocus="this.value=''"  size="30%" placeholder="Ищи людей"></li>
											</div>
										<li><input type="submit" value="Добавить" size="50%"></li>

								</ul>
							</div>
							<?php

			}
			else{
					?>
				<div class="block02">

				</div>
				<?php
			}
*/
			 ?>
			<div class="block03">
				<ul>
					<div class="dropdown">
						<li><a href = "#" >🔔</a></li>
						<div class="dropdown-content">
							<div class="container03" style="display: inline-flex;">
							<a href="#">Пользователь Ivan45@mail.ru приглашает вас в проект ...</a>
							<a href="#" title="Принять">✅</a>
							 <a href="#" title="Отклонить">❎</a>
							 <a href="#" title="Заблокировать">❌</a>
							</div>
							<div class="container03" style="display: inline-flex;">
							<a href="#">Пользователь Igor28@mail.ru приглашает вас в проект ...</a>
							<a href="#">✅</a>
							 <a href="#">❎</a>
							 <a href="#">❌</a>
							</div>
							<div class="container03" style="display: inline-flex;">
							<a href="#">Пользователь Ivan45@mail.ru приглашает вас в проект ...</a>
							<a href="#">✅</a>
							 <a href="#">❎</a>
							 <a href="#">❌</a>
							</div>

						</div>
						</div>
					<li><a href = "/logout" >Выйти</a></li>
					<div class="dropdown">
						<li><a href = "#" >🦔</a></li>
							<div class="dropdown-content">
								<?php
								use Illuminate\Support\Facades\Auth;

								$user = Auth::user();



								  ?>
								<a href="#"><?php echo 	$user->name, "  "; echo $user->sumname;  ?></a>
								<a href="#">{{ $user->email }}</a>
								<a href="#" onclick="document.getElementById('id019').style.display='block'">Редактировать профиль❗</a>
								<a href="#" onclick="document.getElementById('id020').style.display='block'">Сменить пароль❗</a>
						  </div>
						</div>
				</ul>
			</div>

		</div>
<?php


  ?>


<div id="id014" class="modal">

  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id014').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>

        <li><label for="#"><b>Выберите в какой проект вы хотите добавить пользователя.</b></label></li>
        <select>
        <?php
        $variable = ["Создание веб-приложения для управления провектамио","Создание веб-приложения для ...","Создание мобильного-приложения для ...","Создание 1с-конфигурации для ..."];
        foreach ($variable as $value) {
          ?> <option> <?php   echo  $value ;?> </option> <?php
        }

        ?>
        </select>
      </ul>
      <button type="submit">Добавить</button>
    </div>
  </form>
</div>


<div id="id019" class="modal">

  <form class="modal-content animate" action="updatenameandsumname" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id019').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>
		@csrf
    <div class="container2">

      <ul>
				<?php
					echo "<li><label ><b>Имя</b></label></li>
					        <li><input type='text' placeholder='Имя' name='name' required value='$user->name'></li>
					        <li><label><b>Фамилия</b></label></li>
					         <li><input type='text' placeholder='Фамилия' name='sumname' required value='$user->sumname'</li>";
				 ?>

      </ul>


      <button type="submit">Изменить</button>
    </div>
  </form>
</div>

<div id="id020" class="modal">

  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id020').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>Старый пароль</b></label></li>
        <li><input type="text" placeholder="Старый пароль" name="uname" required ></li>
        <li><label for="#"><b>Новый пароль</b></label></li>
         <li><input type="password" placeholder="Новый пароль" name="uname" onfocus="this.value=''" minlength="8" required ></li>
      </ul>
      <button type="submit">Изменить</button>
    </div>
  </form>
</div>

		<script src="/script/script.js" type="text/javascript"></script>
<script type="text/javascript">

	function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
      });
}

/*An array containing all the country names in the world:*/
var countries = ["06lk@mail.ru","gq@yandex.ru","u7yhwf1vb@mail.ru","o@outlook.com","err@gmail.com","pa5h@mail.ru","0f6lfk@mail.ru","gzq@yandex.ru","u7eryhwf1vb@mail.ru","ero@outlook.com","erdfr@gmail.com","pfga5h@mail.ru", "06lr3k@mail.ru","gdsq@yandex.ru","ucv7yhwf1vb@mail.ru","cxvo@outlook.com","efdrr@gmail.com","pdfa5h@mail.ru", "06fdlk@mail.ru","gqzf@yandex.ru","ufd7yhwf1vb@mail.ru","34wo@outlook.com","edsfrr@gmail.com","pdsfa5h@mail.ru","06dsclk@mail.ru","gsdq@yandex.ru","u7sdyhwf1vb@mail.ru","sdso@outlook.com","edsrdfr@gmail.com","pasd5h@mail.ru",];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);

</script>
