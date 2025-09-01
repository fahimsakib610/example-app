<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User ID: {{$id}}</h1>
    @if ($name == null)
        <h2>no username Found!</h2>
    @else
        <h2>Username: {{$name}}</h2>
    @endif

</body>
</html>

        

