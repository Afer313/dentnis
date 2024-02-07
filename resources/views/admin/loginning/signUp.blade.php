<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up page</title>
</head>
<body>
<form method="post">
    @csrf
    <input type="text" name="username" value="{{old('username')}}" placeholder="username">
    <input type="password" name="password" value="{{old('password')}}" placeholder="create password">
    <input type="password" name="confirm_password" value="{{old('confirm_password')}}" placeholder="confirm password">
    <button>Sign up</button>
</form>
</body>
</html>
