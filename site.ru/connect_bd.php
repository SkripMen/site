<?php
//Покдлючение к серверу БД
$dbc= mysqli_connect('localhost','root','','news')
OR die(mysqli_connect_error());
//Подключение кодировки
mysqli_set_charset($dbc,'utf-8');