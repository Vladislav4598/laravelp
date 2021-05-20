<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

$user = Auth::user();
$id = Auth::id();
// echo $_GET['value_project'];


?>

</html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Test</title>
 </head>
 <body>

  <h1 align = "center" style="margin-top: 30%">Error 405</h1>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <?php
   /*не удалять почты*/
   // $ll =[];
   // $select = DB::select('select * from users');
   // foreach ($select as $key => $value) {
   //   if ($value->email != $user->email){
   //     $ll[$key] = $value->email;
   //   }
   //
   // }
   // dd($ll);
    ?>

 </body>
</html>
























<!-- <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
  "http://www.w3.org/TR/html4/frameset.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Тег FRAME</title>
 </head>

 <frameset rows="150,*" cols="*">
   <frame src="help" name="topFrame" scrolling="no" noresize>
   <frameset cols="80,*">
     <frame src="left.html" name="leftFrame" scrolling="no" noresize>
     <frame src="main.html" name="mainFrame">
   </frameset>
 </frameset>

</html> -->
<!-- <html>
 <head>
  <meta charset="utf-8">
  <title>Тег IFRAME</title>
 </head>
 <body>

 <iframe src="help" width="468" height="900" align="left">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
 <iframe src="help" width="468" height="900" align="left">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>


 </body>
</html> -->
