<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayNumber extends Controller
{
    function Summaarray(Request $require){

      $email_a = $_GET['email_a'];
      $password_a = $_GET['password_a'];

      if ($email_a == '1488@mail.ru' and $password_a == '1488' ){
        header("Location: http://localhost/project");
        exit;
      }
      if ($email_a == 'admin@gmail.ru' and $password_a == '0000' ){
        header("Location: http://localhost/admin");
        exit;
      }

      else {
          header("Location: http://localhost/authorization?check=1");
          exit;
        }




  }



}
