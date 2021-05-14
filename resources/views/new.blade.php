@include ('header')


<div class="news">
  <div class="news1">
    <h2 style="text-align: center;">Новости</h2>
    <div class="alert">
      <span class="closebtn">×</span>
      <strong>Опасность!</strong>Пользователь Василий Иванов удален из системы
    </div>

    <div class="alert success">
      <span class="closebtn">×</span>
      <strong>Успешная!</strong> Иван Иванов разработал проект ...
    </div>

    <div class="alert info">
      <span class="closebtn">×</span>
      <strong>Информация!</strong> 10 мая ожидаеться обновления приложения
    </div>

    <div class="alert warning">
      <span class="closebtn">×</span>
      <strong>Предупреждение!</strong> Петр Петров получил бан на 5 часов
    </div>
    <div class="alert success">
      <span class="closebtn">×</span>
      <strong>Успешная!</strong> Игорь Игорев разработал проект ...
    </div>
    <div class="alert success">
      <span class="closebtn">×</span>
      <strong>Успешная!</strong> Иван Иванов разработал проект ...
    </div>
    <div class="alert success">
      <span class="closebtn">×</span>
      <strong>Успешная!</strong> Иван Иванов разработал проект ...
    </div>

  </div>

  <div class="news2">
    <h2 style="text-align: center;">Предложить новость</h2>
    <textarea style="height:763px"  placeholder="Введите текст (maxlength = 255 symbot)" maxlength="255" name="" ></textarea>
    <button class="btn success">Отправить</button>
    </div>
</div>
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}
</script>

</body>
</html>
