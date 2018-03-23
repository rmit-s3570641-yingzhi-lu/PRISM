<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register confirm link</title>
</head>
<body>
  <h1>Thanks for register in PRISM</h1>

  <p>
    Click the link below to complete the register:
    <a href="{{ route('confirm_email', $user->activation_token) }}">
      {{ route('confirm_email', $user->activation_token) }}
    </a>
  </p>

  <p>
    If it is not your operation, ignore it.
  </p>
</body>
</html>