<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>
<body>
    <h2>{{ $title }}</h2>

    <p>{{ $emailMessage }}</p>
    <a href="{{ $url }}">Reset Password</a>

    <p>If you did not request a password reset, no further action is required.</p>
</body>
</html>
