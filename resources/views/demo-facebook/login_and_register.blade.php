<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <h1>login</h1>
    <form action="#" method="post" name="dang_nhap">
        <input type="text" name="email" placeholder="nhập email"><br>
        <input type="password" name="password" placeholder="nhập password"><br><br>
        <button>đăng nhập</button>
    </form>
</div>
<br>
<div id="register">
    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="text" name="firstName" placeholder="Tên"><br>
        <input type="text" name="lastName" placeholder="Last name"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="password" placeholder="password"><br>
        <input type="text" name="phoneNumber" placeholder="số điện thoại"><br>
        <input type="date" name="birthday" placeholder="Sinh nhật"><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="text" name="avatar" placeholder="avatar"><br>
        <input type="text" name="coverPhoto" placeholder="cover photo"><br>
        <button>register</button>
    </form>

</div>
</body>
</html>
