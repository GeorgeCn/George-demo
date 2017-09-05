<?php
var_dump(memory_get_usage()); // 返回分配给 PHP 的内存量
							  //如果设置为 TRUE，获取系统分配总的内存尺寸，包括未使用的页。如果未设置或者设置为 FALSE，仅仅报告实际使用的内存量。