<?php
	$test1 = 10;
	$test2 = 20;
	
	if ($test1 > $test2) {
		print('Переменная "test1" больше переменной "test2"');
	} elseif ($test1 < $test2) {
		print('Переменная "test2" больше переменной "test1"');
	} else {
		print('Переменные "test1" и "test2" равны');
	}