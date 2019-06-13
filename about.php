<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, ibitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Написать нам</title>
  </head>
  <body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
      <h3>Вопросы? Напишите нам!</h3>
      <form action="check.php" method="post">
        <input type="email" name="email" placeholder="Введите Email" class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
        <button type="submit" name="send" class="btn btn-success">Отправить</button>
      </form>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
