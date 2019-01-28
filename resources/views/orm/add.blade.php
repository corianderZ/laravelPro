<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>数据添加</h2>
    <br>
    <form action="/add" method="post">
        {{ csrf_field() }}
        名字：<input name="name" type="text"/>
        密码：<input name="password" type="password"/>
        <input type="submit" value="提交"/>
    </form>
</body>
</html>