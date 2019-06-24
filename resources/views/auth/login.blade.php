<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
</head>
<body>

<h1>ログインフォーム</h1>
@isset($message)
    <p style="color: red">{{$message}}</p>
@endisset

<form name="loginform" action="/auth/login" method="post">
    {{csrf_field()}}
    メールアドレス：<input type="text" name="email" sise="30" value="{{old('email')}}">
    <br>
    パスワード：<input type="text" name="password" size="30">
    <br>
    <button type="submit" name="action" value="send">ログイン</button>
</form>

</body>
</html>
