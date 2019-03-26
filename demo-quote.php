<?php

//引用赋值

	$a = 100;
	$b = &$a;

	$b = 10000;

	echo $b;
	echo "<br>";
	echo $a;
	echo "分支测试";