<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>JS</title>
    <style>
        #box{
            width: 200px;
            height: 50px;
            border:1px solid #999;
            padding: 20px;
            font-size: 50px;
            color: #f00;
            font-weight: 700;
            text-align:  center;
            line-height: 50px; 
        }
    </style>
</head>
<body>
    <h1>倒计时</h1>
    <hr>
    <button onclick="timer = setInterval( 'start();',500 )">开始</button>
    <hr>
    <div id="box">10</div>

    <script>
		/*
		setInterval 返回值是数字，从1开始，
		setInterval() 方法会不停地调用函数，直到 clearInterval() 被调用或窗口被关闭。由 setInterval() 返回的 ID 值可用作 clearInterval() 方法的参数。
		比方说clearInterval(attime) ;这样就可以停止调用函数，
		事实上，如果你只用了一次setInterval ，返回的值就是1，
		然后clearInterval(1);也是可以停止调用函数的
		*/
        var m = 10;
        function start() {
            var div = document.getElementById('box');
            m--;
            div.innerHTML = m;
            if (m == 0) {
                clearInterval(timer);
            }
        }
    </script>
</body>
</html>