
@include ('header')

<div id="id01" class="modal">

  <form class="modal-content animate" action="createproject" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      @csrf
      <ul>
        <li><label for="#"><b>Название проекта</b></label></li>
        <li><input type="text" placeholder="Название проекта" name="name_project" required></li>
        <li><label for="#"><b>Цель проекта</b></label></li>
        <li><input type="text" placeholder="Цель проекта" name="target_project" required></li>
        <li><label for="#"><b>Вид проекта</b></label></li>
        <li><select name="view_project">
          <option selected value="s1">Одинночный</option>
          <option value="s2">Групповой</option>
          </select>
        </li>
        <li><label for="#"><b>Дата начала</b></label></li>
        <li><input type="date" placeholder="" name="date_start" required></li>
        <li><label for="#"><b>Дата окончания</b></label></li>
        <li><input type="date" placeholder="" name="end_start" required></li>
        <li><label for="#"><b>Описание проекта</b></label></li>
        <li><textarea style="height:150px"  placeholder="Описание проекта"  name="descript_project" required></textarea></li>
      </ul>
      <button type="submit">Создать проект</button>
    </div>
  </form>
</div>

<div id="id011" class="modal">

  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id011').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>Выберите проект</b></label></li>
        <select>
        <?php
        $variable = ["Создание веб-приложения для управления провектамио","Создание веб-приложения для ...","Создание мобильного-приложения для ...","Создание 1с-конфигурации для ..."];
        foreach ($variable as $value) {
          ?> <option> <?php   echo  $value ;?> </option> <?php
        }

        ?>
        </select>
        <li><label for="#"><b>Название задачи</b></label></li>
        <li><input type="text" placeholder="Название задачи" name="uname" required></li>
        <li><label for="#"><b>Цель задачи </b></label></li>
        <li><input type="text" placeholder="Цель задачи" name="uname" required></li>
        <li><label for="#"><b>Важность задачи </b></label></li>
        <select>
        <?php
        $variable = ["Срочно, важно","Не срочно, важно","Срочно, не важно","Не срочно, не важно"];
        foreach ($variable as $value) {
          ?> <option> <?php   echo  $value ;?> </option> <?php
        }

        ?>
        </select>

        <li><label for="#"><b>Ответственный за задачу</b></label></li>
        <select>
        <?php
        $variable = ["06lk@mail.ru","gq@yandex.ru","u7yhwf1vb@mail.ru",
    		"o@outlook.com","err@gmail.com","pa5h@mail.ru"];
        foreach ($variable as $value) {
          ?> <option> <?php   echo  $value ;?> </option> <?php
        }

        ?>
        </select>

        <li><label for="#"><b>Описание задачи</b></label></li>
        <li><textarea style="height:150px"  placeholder="Описание задачи"  name="uname" required></textarea></li>
      </ul>
      <button type="submit">Создать задачу</button>
    </div>
  </form>
</div>

<div id="id030" class="modal">

  <form class="modal-content animate" action="/project">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id030').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>Название проекта</b></label></li>
        <li><label><b>Создание веб-приложения для управления провектами</b></label></li>
        <li><label for="#"><b>Цель проекта</b></label></li>
        <li><label><b>Написание ВКР</b></label></li>
        <li><label for="#"><b>Вид проекта</b></label></li>
        <li><label><b>Одиночный</b></label></li>
        <li><label for="#"><b>Дата начала</b></label></li>
        <li><label><b>26.03.21</b></label></li>
        <li><label for="#"><b>Дата окончания</b></label></li>
        <li><label><b>12.05.21</b></label></li>
        <li><label for="#"><b>Описание проекта</b></label></li>
        <li><label><b>...</b></label></li>
      </ul>
      <button type="submit">Ок</button>
    </div>
  </form>
</div>


<div id="id031" class="modal">

  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id031').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>Создание веб-приложения для управления провектами</b></label></li>
        <li><label for="#"><b>Удалить проект?</b></label></li>
      </ul>
      <button type="submit" style="background: red">Да</button>
    </form>
     <form action="/project">
      <button type="submit" >Нет</button>
    </form>
  </div>

</div>


<div id="id032" class="modal">

  <form class="modal-content animate" action="/project">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id032').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>Название задачи</b></label></li>
        <li><label><b> построение логический действий в веб-приложении</b></label></li>
        <li><label for="#"><b>Цель задачи</b></label></li>
        <li><label><b>Написание ВКР</b></label></li>
        <li><label for="#"><b>Статус задачи</b></label></li>
        <li><label><b>Не Нначата</b></label></li>
        <li><label for="#"><b>Дата начала</b></label></li>
        <li><label><b>28.04.21</b></label></li>
        <li><label for="#"><b>Дата окончания</b></label></li>
        <li><label><b>5.05.21</b></label></li>
        <li><label for="#"><b>Описание задачи</b></label></li>
        <li><label><b>...</b></label></li>
      </ul>
      <button type="submit">Ок</button>
    </div>
  </form>
</div>

<div id="id033" class="modal">

  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id033').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>построение логический действий в веб-приложении</b></label></li>
        <li><label for="#"><b>Удалить задачу?</b></label></li>
      </ul>
      <button type="submit" style="background: red">Да</button>
    </form>
     <form action="/project">
      <button type="submit" >Нет</button>
    </form>
    </div>
</div>


<div id="id034" class="modal">

  <form class="modal-content animate" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id034').style.display='none'" class="close1" title="Close Modal">×</span>

    </div>

    <div class="container2">
      <ul>
        <li><label for="#"><b>проектирование бизнес-процессов</b></label></li>
        <li><label for="#"><b>Завершить задачу?</b></label></li>
      </ul>
      <button type="submit">Да</button>
    </form>
     <form action="/project">
      <button type="submit" >Нет</button>
    </form>
    </div>
</div>



<div class="project">
  <div class="projects">
    <div class="projects1">
      <ul>
        <li><input type="submit" value="Создать проект" name="createproject" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></li>
      </ul>
    </div>
    <div class="projects2">
      <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание веб-приложения для управления провектами</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search" onclick="document.getElementById('id030').style.display='block'" title="Посмотреть"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash" onclick="document.getElementById('id031').style.display='block'" title="Удалить"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание веб-приложения для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание мобильного-приложения для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание 1с-конфигурации для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <div class="projects21">
        <div class="nameprojects21">
          <a href="">Автоматизация веб-приложения для</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание веб-приложения для управления провектами</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание веб-приложения для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание мобильного-приложения для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание 1с-конфигурации для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <div class="projects21">
        <div class="nameprojects21">
          <a href="">Автоматизация веб-приложения для</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание веб-приложения для управления провектами</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание веб-приложения для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание мобильного-приложения для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Создание 1с-конфигурации для ...</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <div class="projects21">
        <div class="nameprojects21">
          <a href="">Автоматизация веб-приложения для</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <div class="projects21">
        <div class="nameprojects21">
          <a href="">Автоматизация веб-приложения для</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="projects21">
        <div class="nameprojects21">
          <a href="">Автоматизация веб-приложения для</a>
        </div>
        <div class="infoprojects21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removeprojects21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
    </div>


<?php

         /* <li><a href="">Автоматизация веб-приложения для ...</a></li>
          <li><a href="">Создание 1с-конфигурации для ...</a></li>
          <li><a href="">Создание веб-приложения для ...</a></li>
          <li><a href="">Создание мобильного-приложения для ...</a></li>*/
     ?>
  </div>

  <div class="task">
    <div class="createtask">
      <ul>
        <li><input type="submit" value="Создать задачу" name="createtask" onclick="document.getElementById('id011').style.display='block'"  style="width:auto;"></li>
      </ul>

    </div>
    <div class="theetask">
      <div class="theetask1">

      <div class="tasks">
        <ul>
          <li>Список Задач</li>
        </ul>
      </div>
      <div class="tasks21">
        <div class="nametasks21">
          <a href="">прорисовка макета веб-приложения</a>
        </div>
        <div class="infotasks21">
         <a href="#" class="search" onclick="document.getElementById('id032').style.display='block'"><i class="fa fa-search " title="Посмотреть" ></i></a>
        </div>
        <div class="removetasks21">
          <a href="#" class="trash" onclick="document.getElementById('id033').style.display='block'"><i class="fa fa-trash" title="Удалить"></i></a>
        </div>
      </div>
            <div class="tasks21">
        <div class="nametasks21">
          <a href="">соединение с сервером</a>
        </div>
        <div class="infotasks21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removetasks21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="tasks21">
        <div class="nametasks21">
          <a href="">соединение с базой данных</a>
        </div>
        <div class="infotasks21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removetasks21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>
            <div class="tasks21">
        <div class="nametasks21">
          <a href="">построение логический действий в веб-приложении</a>
        </div>
        <div class="infotasks21">
         <a href="#" class="search"><i class="fa fa-search"></i></a>
        </div>
        <div class="removetasks21">
          <a href="#" class="trash"><i class="fa fa-trash"></i></a>
        </div>
      </div>



    </div>

      <div class="theetask2">
        <div class="tasksinprogress">
          <ul>
            <li>Задачи в процессе</li>
          </ul>
        </div>
        <div class="tasksinprogress21">
          <div class="nametasksinprogress21">
            <a href="">проектирование бизнес-процессов</a>
          </div>
          <div class="infotasksinprogress21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        <div class="removetasksinprogress21">
          <a href="#" onclick="document.getElementById('id034').style.display='block'" title="Завершить" >&#10004;</a>
        </div>
          </div>
                  <div class="tasksinprogress21">
          <div class="nametasksinprogress21">
            <a href="">написание технического задания</a>
          </div>
          <div class="infotasksinprogress21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        <div class="removetasksinprogress21">
          <a href="#">&#10004;</a>
        </div>
          </div>
                  <div class="tasksinprogress21">
          <div class="nametasksinprogress21">
            <a href="">выбор и обоснование средств реализации системы</a>
          </div>
          <div class="infotasksinprogress21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        <div class="removetasksinprogress21">
          <a href="#">&#10004;</a>
        </div>
          </div>
                  <div class="tasksinprogress21">
          <div class="nametasksinprogress21">
            <a href="">обоснование выбора программно-технических средств</a>
          </div>
          <div class="infotasksinprogress21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        <div class="removetasksinprogress21">
          <a href="#">&#10004;</a>
        </div>
          </div>
          <div class="tasksinprogress21">
          <div class="nametasksinprogress21">
            <a href="">разработать интерфейс взаимодействия приложения с пользователем</a>
          </div>
          <div class="infotasksinprogress21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        <div class="removetasksinprogress21">
          <a href="#">&#10004;</a>
        </div>
          </div>

      </div>

    <div class="theetask3">
      <div class="taskscompleted">
        <ul>
          <li>Завершенные задачи</li>
        </ul>
      </div>
      <div class="taskscompleteds21">
          <div class="nametaskscompleted21">
            <a href="">проанализировать деятельность компании</a>
          </div>
          <div class="infotaskscompleted21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        </div>
              <div class="taskscompleteds21">
          <div class="nametaskscompleted21">
            <a href="">проанализировать информационные системы компании</a>
          </div>
          <div class="infotaskscompleted21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        </div>
              <div class="taskscompleteds21">
          <div class="nametaskscompleted21">
            <a href="">изучить организационную структуру</a>
          </div>
          <div class="infotaskscompleted21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        </div>
              <div class="taskscompleteds21">
          <div class="nametaskscompleted21">
            <a href="">изучить аппаратные средства компании</a>
          </div>
          <div class="infotaskscompleted21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        </div>
              <div class="taskscompleteds21">
          <div class="nametaskscompleted21">
            <a href="">выявить проблемы компании</a>
          </div>
          <div class="infotaskscompleted21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        </div>
              <div class="taskscompleteds21">
          <div class="nametaskscompleted21">
            <a href="">сделать обзор существующих средств автоматизации</a>
          </div>
          <div class="infotaskscompleted21">
           <a href="#" class="search"><i class="fa fa-search"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="notesandchat">
    <ul>
      <li >Заметки</li>
        <li><textarea style="height:770px"  placeholder="Твои заметки"  name="uname" ></textarea></li>
        <button class="btn success">Сохранить</button>
    </ul>
  </div>

</div>

@include ('footer')
