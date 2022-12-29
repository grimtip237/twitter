<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<?
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");
	if ($connect== false) {
    	  echo "не подключено";
    } else{
    	  echo "подключено";
    }
	$text_query = 'SELECT * FROM users';
    $query = mysqli_query($connect, $text_query);
    if ($query==false) {
    	 echo " Запрос не работает";
    }else{
    	echo " запрос работает";
    }

    $select = "SELECT * FROM users";

   	$insert = "INSERT INTO users(name, number) VALUES ('{$_GET['autor']}', '{$_GET['number']}')";

   	$result_insert = mysqli_query($connect, $insert);
   	$results = mysqli_query($connect, $select);
	?>


</head>
<body>
	<div style="height: 1000px;" class="col-12 d-flex main">
		<div class="col-8 bg-info">
			<div class="px-quto">
				<img style="margin-left: 150px; margin-top: 250px;" class="w-50" src="logo.png">
			</div>
		</div>
		<div class="col-4">
			<div style="margin-top: 200px;">
			     <img style="height: 50px; width: 70px; margin-bottom: 20px;" src="logo2.png">
			     <h6>Создайте учетную запись</h6>
			     <form method="GET">
			     	<input type="" name="autor" placeholder="Имя">
			     	<textarea name="number" class="mt-2" placeholder="Телефон"></textarea>
			     	<button type="submit" class="btn btn-primary mt-2">
			     		Зарегестрироваться
			     	</button>
			     </form>
		    </div>
		</div>
	</div>
</body>
</html>