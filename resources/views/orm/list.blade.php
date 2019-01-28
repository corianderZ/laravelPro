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
    <h2>列表</h2>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>action</td>
        </tr>
        @foreach($data as $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->name }}</td>
                <td><a href="/edit/{{ $v->id }}">编辑</a>|<a href="/del/{{ $v->id }}">删除</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>