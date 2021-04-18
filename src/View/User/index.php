<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../webroot/css/overall.css">

    <title>PiePHP</title>
</head>

<body>

    <?php if (isset($_SESSION['user'])) : ?>

        <?php echo "<h4 style='text-align:center;'>You're now connected under" . " " . $_SESSION['user'][0]['email'] . "</h4>"; ?>

        <form action="http://pie.localhost/index" method="POST" style="text-align: center;">

            <label for="modify">Modify Email</label>
            <input type="email" name="modifyEmail">
            <input type="submit" name="submit" value="submit">

        </form>
    <?php else : ?>

        <?php header('Location:http://pie.localhost/login'); ?>

    <?php endif ?>





</body>

</html>