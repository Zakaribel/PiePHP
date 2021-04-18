<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/overall.css">

    <title>PiePHP login</title>
</head>

<body>

    <div style="text-align: center;">
        <h1>Login</h1>
      <p>Please fill in this form in order to login.</p>
      <hr>
      </div>
    <form action="http://pie.localhost/login" method="POST" style="text-align: center;">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" name="submit" value="Submit">
    </form>



    <div style="text-align: center;">
        <a href="http://pie.localhost/register">Register here</a>
    </div>
</body>

</html>