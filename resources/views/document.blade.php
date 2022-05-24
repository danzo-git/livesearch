<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {!! !Auth::user()? "<li id='sign_in'><a href='/register'>Sign In</a></li>":'votre session est toujours active M '.Auth::user()->name!!}
    <br>
    je suis le document  {{$doc->id}}
    {{$doc->description}}
    
</body>
</html>