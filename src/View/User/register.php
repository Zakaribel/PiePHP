<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Register</title>
</head>

<body>

  <form action="http://pie.localhost/register" method="POST" style="text-align:center;">
    <div class="container">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" id="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

      <button type="submit" class="registerbtn">Register</button>
    </div>
  </form>

  <div style="text-align:center;">
  <a href="http://pie.localhost/login">Already have an account ? click here to login </a>
  </div>

</body>

</html>