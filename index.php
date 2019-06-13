<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, ibitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Магазин На Зацен</title>
  </head>
  <body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
      <h3 class="mb-5">Товары:</h3>
      <div class="d-flex flex-wrap">
        <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Дистрибуция</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">350р. <small class="text-muted"> - альбом</small></h1>
          <h1 class="card-title pricing-card-title">150р. <small class="text-muted"> - трек</small></h1>
          <h5 class="mt-4">Требования:</h4>
          <ul class="list-unstyled mt-1 mb-4">
            <li>1.Трек в формате mp3 или wav</li>
            <li>2.Разрешение обложки 3100x3100px</li>
            <li>3.Исполнитель и название трека</li>
            <li>4.Эксклюзивные права на бит</li>
          </ul>
          <button type="button" class="btn btn-lg btn-block btn-outline-primary">Купить</button>
        </div>
        </div>
      </div>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
