<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Practice</title>
</head>
<body>
    <h1>Practice Laravel</h1>
    <?php
    $kowsik = $details["kowsik"];
    $yeasin = $details["yeasin"];
    var_dump($kowsik->nameki());
    ?>
    <h1>{{$yeasin}}</h1>
    <form action="/input" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="name" class="form-control">
        <button>submit</button>
    </form>
</body>
</html>