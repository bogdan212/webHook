<?php

$Leads =$_POST['leads'];


$name=$leads['_embedded']['items'][0]['name'];
$email=$leads['_embedded']['items']['name:Email'];

//БД не подключал так как получал только пустой массив данных , видимо проблемы с макхост


$user = 'root';
$password ='';
$db ='testing';
$host ='localhost';

$dsn = 'mysql:host='.$host.';dbname='.$db;
$pdo = new PDO($dsn, $user, $email);
// move_uploaded_file($_FILES&#91;"img_file"&#93;&#91;"tmp_name"&#93;, "/files/".$_FILES&#91;"img_file"&#93;&#91;"name"&#93;);
// $path_file = "/files/".$_FILES&#91;"img_file"&#93;&#91;"name"&#93;;
$sql = 'INSERT INTO users(name, email) VALUES(?,?)';
$query = $pdo->prepare($sql);
$query->execute([$name,$email]);




 ?>
