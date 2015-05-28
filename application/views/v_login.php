<html>
<head>
<title>Form Login</title>
<link href='login/style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<form action="<?php base_url()?>verifikasi" method="post">
<div class="login">
 
    <h1>Login</h1>

  <div class="login-form">
    <h3>Username:</h3>
    <input type="text" placeholder="Username" name="username"/><br>
    <h3>Password:</h3>
    <input type="password" placeholder="Password" name="password"/>
    <br>
    <input type="submit" value="Login" class="login-button"/>
    <br>

    <br>

  </div>
</div>
</form>
</body>
</html>