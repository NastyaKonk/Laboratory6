<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8"/>
  <title>ЛБ 2</title>
  <link href="style1.css" rel="stylesheet">
 </head>

 <body>  
 <main>
  <h1>Лабораторная №2. Вариант №8</h1>
  <form style = "margin-top: 20px;" action="lb1-1.php" method="POST">
  <h3>Сообщение от выбранного клиента</h3>
  <h3 style="color: rgb(57, 57, 57)">Выберете клиента:</h3>
        <select name="login" id = "login" onclick="localStorage.setItem('login', saved.value)">
        <option> Ivan </option>
        <option> Maria </option>
        <option> Daria </option>
        </select>
          <input type = "submit" value = "Выбрать">
  </form>

  <form action="lb1-2.php" method="POST">
  <h3>Общий входящий и исходящий трафик</h3>
  <input type = "submit" value = "Просмотр">
  </form>
   
  
  <form action="lb1-3.php" method="POST">
  <h3>Клиенты с отрицательным балансом счета</h3>
  <input style = "width: 300px;" type = "submit" value = "Просмотреть список клиентов">
  </form>

<script>
  const saved = document.getElementById('login');
  saved.value = localStorage.getItem('login');
</script>

</main>
 </body>
</html>
