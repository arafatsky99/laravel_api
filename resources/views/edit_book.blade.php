<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
</head>
<body>
    <form action="/books/{{$book->id}}" method="PUT">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="text" name="name" value="{{$book->name}}">
        <button>Edit Book</button>
    </form>
</body>
</html>