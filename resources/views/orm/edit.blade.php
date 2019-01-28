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
    <h2>编辑页面</h2>
    <br>
    <form action="/edit/{{ $info->id }}" method="post">
        {{ csrf_field() }}
        名字：<input name="name" type="text" value="{{ $info->name }}"/>
        密码：<input name="password" type="password" value="{{ $info->password }}"/>
        <input type="submit" value="提交"/>
    </form>
</body>
</html>