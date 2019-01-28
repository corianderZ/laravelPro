<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script> -->
    <script src="{{ asset('/test/jquery.min.js') }}"></script>
</head>
<body>
    <!-- <form action="/user/add" method="post"> -->
    <!-- <input type="hidden" name="_token" value="{{ csrf_field() }}"> -->
       
        <input name="name" type="text" id="name"/>
        <input name="age" type="number" id="age"/>
        <!-- <input type="submit" value="提交"> -->
        <button id="btn">提交</button>
    <!-- </form> -->
</body>
</html>
<script>
    $('#btn').click(function(){
        $.ajax({
            'url':'/setValues',
            'datatype':'json',
            'success':function(data){
                $('#name').val(data.name);
                $('#age').val(data.age);
            },
            'error':function(){
                alert('请求发生错误')
            }
        });
    });
</script>