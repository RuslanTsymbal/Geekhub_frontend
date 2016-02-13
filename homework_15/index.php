<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Homework#15</title>
	<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/reset.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>			
	<div id="wrapper">
		<div id="header">
			<h1 class="title">Тема: "PHP"</h1>
			<h2 class="about">"Работа с формами"</h2>
		</div>
		<div id="form-info">
			<form name="form" action="php/form.php" method="POST">
				<!--Form 1-->
				<fieldset class="border">
					<legend>Коротко о себе</legend>
					<ul>
						<li>
							<label for="name">Имя:</label>
							<input type="text" name="f_name" id="name" required>
						</li>
						<li>
							<label for="surname">Фамилия:</label>
							<input type="text" name="s_name" id="surname" required>
						</li>
						<li>
							<label for="sex">Пол:</label>
							<input type="radio" name="sex" id="sex" checked value="мужской">
							<label for="sex">мужской</label>
							<input type="radio" name="sex" id="radio_2" value="женский">
							<label for="radio_2">женский</label>
						</li>
						<li>
							<label for="age">Возраст:</label>
							<input type="text" name="age" id="age" required>
							<label for="age">года</label>
						</li>
					</ul>
				</fieldset>
				<fieldset class="form_3">
					<legend>Инфомация о вас</legend>
					<ul>
						<li>
							<h4 class="spam">Хотите подписаться на самую модную рассылку спама?</h4>
						</li>
						<li>
							<h4 class="italic">Выберите категорию</h4>
						</li>
						<li>
							<ul>
								<li>
									<label><input type="checkbox" name="equipment[]" value="1"> Оборудование</label>
								</li>
								<li>
									<label><input type="checkbox" name="equipment[]" value="2"> Как приготовить обеды</label>
								</li>
								<li>
									<label><input type="checkbox" name="equipment[]" value="3"> Заработай миллион за два дня!</label>
								</li>
							</ul>
						</li>
						<li>
							<h4 class="questions">На сколько сложная задача:</h4>
						</li>
						<li>
							<ul>
								<li>
									<label><input type="radio" name="question[]" checked value="1">Совсем нет</label>
								</li>
								<li>
									<label><input type="radio" name="question[]" value="2">Так себе</label>
								</li>
								<li>
									<label><input type="radio" name="question[]" value="3">Еле справились</label>
								</li>
							</ul>
						</li>
					</ul>
				</fieldset>
				<fieldset class="form_3">
					<legend>Поля ввода - HTML5</legend>
					<ul>
						<li>
							<span class="block">Введите Веб-адрес:</span>
							<input type="url" name="url" placeholder="www." required>
						</li>
						<li>
							<span class="block">Ввш email:</span>
							<input  type="email" name="email" placeholder="email" required>
						</li>
						<li>
							<span class="block">Введите любимое число от 1 до 10:</span>
							<input type="number" name="number" min="0" max="10" required>
						</li>
						<li>
						    <span class="block">Ваша дата рождения:</span>
							<input type="date" name="date" required>
						</li>
						<li>
							<span class="block">Номер вашего телефона:</span>
							<input type="tel" name="tel" value="+38" required>
						</li>
						<li>
							<span class="block">В каком месяце и году вы родились:</span>
							<input type="month" name="month" required>
						</li>
						<li>
							<span class="block">Ваши комментарии:</span>
							<textarea name="comments" rows="10" cols="47" required ></textarea>
						</li>
					</ul>
				</fieldset>
				<!--Button-->
				<div id="submit">
					<input type="submit" name="submit" value="Отправить">
				</div>
			</form>
		</div>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="js/myjs.js"></script>
</body>
</html>


