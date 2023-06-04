<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
<form action="/login/logme" method="POST">
    <div>
        <label>
            Name <input name="name"/>
        </label>
    </div>
    <div>
        <label>
            Password <input name="password" type="password"/>
        </label>
    </div>
    <div>
        <button type="submit">Login</button>
    </div>
</form>
</body>
</html>