<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in page</title>
</head>
<body>
<form method="post">
@csrf
    <input type="text" name="username" value="{{old('username')}}" placeholder="username">
    @error('username')
    {{$message}}
    @enderror
    <input type="password" name="password" placeholder="your password">
    @error('password')
    {{$message}}
    @enderror
    <button type="submit">Log in!</button>
</form>
</body>
</html>
