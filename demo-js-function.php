<!DOCTYPE html>
<html>
<head>
	<title>js函数demo</title>
</head>
<body>
<script type="text/javascript">
	function demo () {
		console.log('第一种: 函数定义');
		var mask = document.createElement("b");
		document.body.appendChild(mask)
	}

	var demo1 = function () {
		console.log('第二种：匿名函数赋变量');
	}

	//使用Function构造函数
    var demo2 = new Function('console.log("第三种：构造函数")');

    demo();
    demo1();
    demo2();

    //附加：
    var demo3 = {
    	test : function () {
    		console.log('第四种: json定义对象方法');
    	}
    }
    demo3.test();
</script>
</body>
</html>