<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 offset-md-0">
            <table class="table table-striped table-hover table-dark">
                @foreach($rs as $index => $r)
                    <tr>
                        <td>{{$index + 1}}</td>
                        <td>{{$r}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
