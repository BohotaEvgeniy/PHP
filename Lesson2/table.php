<?php 
/*A task 6
 Составить таблицу сравнения типов данных и таблицу результатов работы функции gettype
Вывести таблица на странице, при помощи тега table
Заполните каждую ячейку нужной функцией и выполните один раз, что бы таблица сразу сформировалась с определенными данными.
*/


?>



<!DOCTYPE html>
<html>
<head>

  <title>IMT-academy/homeWork</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container">

    <table class="table table-bordered table-striped table-hover">
      <thead class="thead-inverse">
        <tr>
          <th>Выражение</th>
          <th>gettype()</th>
          <th>empty()</th>
          <th>isset()</th>
          <th>boolean : if($x)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?php $x = ""; ?>$x = "";</th>
          <td><?php echo gettype($x); ?></td>
          <td><?php if(!$x) {
            echo "True";
          } else {
            echo "False";
          } ?>
        </td>
        <td><?php if(!$x) {
          echo "True";
        } else {
          echo "False";
        } ; ?>
      </td>
      <td><?php if($x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
  </tr>
  <tr>
   <th scope="row"><?php $x = null; ?>$x = null;</th>
   <td><?php echo gettype($x); ?></td>
   <td><?php if(!$x) {
    echo "True";
  } else {
    echo "False";
  } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x; ?>$x неопределена </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = array();  ?>$x = array(); </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if(!$x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = false;  ?>$x = false; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if(!$x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = true;  ?>$x = true; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = 1;  ?>$x = 1; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
     <th scope="row"><?php $x = 42;   ?>$x = 42;  </th>
     <td><?php echo gettype($x); ?></td>
     <td><?php if(!$x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = 0;  ?>$x = 0; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if(!$x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = -1;  ?>$x = -1; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = "1";  ?>$x = "1"; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = "0";  ?>$x = "0"; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if(!$x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = "-1"; ?>$x = "-1";</th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = "php";  ?>$x = "php"; </th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = "true"; ?>$x = "true";</th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    <tr>
      <th scope="row"><?php $x = "false"; ?>$x = "false";</th>
      <td><?php echo gettype($x); ?></td>
      <td><?php if(!$x) {
        echo "True";
      } else {
        echo "False";
      } ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ; ?>
    </td>
    <td><?php if($x) {
      echo "True";
    } else {
      echo "False";
    } ?>
    </td>
    </tr>
    </tbody>
    </table>
</div>
 

</body>
</html>

