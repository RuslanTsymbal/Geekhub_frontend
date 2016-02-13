<?php

$valid_form = true;

if ($_POST['f_name'] != "") {
   $f_name = $_POST['f_name'];
} else if ($_POST['f_name'] == "") {
   $valid_form = false;
   }

if ($_POST['s_name'] != "") {
   $s_name = $_POST['s_name'];
} else if ($_POST['s_name'] == "") {
   $valid_form = false;
}

if ($_POST['sex'] != "") {
   $sex = $_POST['sex'];
} else if ($_POST['sex'] == "") {
   $valid_form = false;
}

if ($_POST['age'] != "") {
   $age = $_POST['age'];
} else if ($_POST['age'] == "") {
   $valid_form = false;
}

$equipment = $_POST['equipment'];
foreach($equipment as $key => $value);

$question = $_POST['question'];
foreach($question as $key => $value2);

if ($_POST['url'] != "") {
   $url = $_POST['url'];
} else if ($_POST['url'] == "") {
   $valid_form = false;
}

if ($_POST['email'] != "") {
   $email = $_POST['email'];
} else if ($_POST['email'] == "") {
   $valid_form = false;
}

if ($_POST['number'] !="") {
   $number = $_POST['number'];
} else if ($_POST['number'] == "") {
   $valid_form = false;
}

if ($_POST['date'] !="") {
   $date = $_POST['date'];
} else if ($_POST['date'] == "") {
   $valid_form = false;
}

if ($_POST['tel'] !="") {
   $tel = $_POST['tel'];
} else if ($_POST['tel'] == "") {
   $valid_form = false;
}

if ($_POST['month'] !="") {
   $month = $_POST['month'];
} else if ($_POST['month'] == "") {
   $valid_form = false;
}

if ($_POST['comments'] !="") {
   $comments = $_POST['comments'];
} else if ($_POST['comments'] == "") {
   $valid_form = false;
}

if ($valid_form != true){
   echo "<h1>Не все поля формы были заполнены.</h1>";
  }

if ($valid_form == true){
   echo "<h1>Данные с формы:</h1>";
   echo "- Ваше имя: $f_name;<br>";
   echo "- Вашa фамилия: $s_name;<br>";
   echo "- Ваш пол: $sex;<br>";
   echo "- Ваш возраст: $age;<br>";
   echo "- Вы подписались на самую модную рассылку спама (категория): $value;<br>";
   echo "- Задача оказалась сложной: $value2;<br>";
   echo "- Веб-адрес: $url;<br>";
   echo "- Ваш email: $email;<br>";
   echo "- Ваше любимое число: $number;<br>";
   echo "- Ваша дата рождения: $date;<br>";
   echo "- Номер вашего телефона: $tel;<br>";
   echo "- Вы родились в месяце: $month;<br>";
   echo "- Ваши комментарии: $comments;<br>";
}
?>


