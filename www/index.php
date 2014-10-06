<?php
/* Главный файл системы
 * Автор: perezzloy
 * Создано: 05.10.2014 20:40
*/

function getBlock($value){
	$d = 'template/blocks/';
	$e = '.php';
	switch ($value) {
		case '':
			$getFile = $d.'main'.$e;
			include $getFile;
			echo $s;
			break;

		case 'main':
			$getFile = $d.$value.$e;
			include $getFile;
			echo $s;
			break;

		case 'head':
			$getFile = $d.$value.$e;
			include $getFile;
			echo $s;
			break;

		case 'header':
			$getFile = $d.$value.$e;
			include $getFile;
			echo $s;
			break;

		case 'g-menu':
			$getFile = $d.$value.$e;
			include $getFile;
			echo $s;
			break;

		case 'content':
			$getFile = $d.$value.$e;
			include $getFile;
			echo $s;
			break;

		case 'footer':
			$getFile = $d.$value.$e;
			include $getFile;
			echo $s;
			break;
		
		default:
			$getFile = $d.'404'.$e;
			include $getFile;
			echo $s;
			break;
	}
}

echo file_get_contents('template/s/main.html');

function Templater($s){
	
}