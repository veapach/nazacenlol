<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, ibitial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Наша команда</title>
  </head>
  <body>
    <?php require "blocks/header.php" ?>
    <h1 class="container mb-4" style="text-align: center;"> Наша команда:</h1>
    <div align="center">
    <div class="card-deck mb-3 text-center container">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h3 class="my-0 font-weight-normal">T-Gear</h3>
        <h6 class="my-0 font=weight-normal">Основатель</h6>
      </div>
      <div class="card-body">
        <img width="100px" src="/img/okem.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Он решил сделать "На Зацен"</li>
          <li>Занимается музыкой с 12 лет</li>
          <li>Много постоянных покупателей</li>
          <li>Уже работает на студии</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h3 class="my-0 font-weight-normal">veapach</h3>
        <h6 class="my-0 font=weight-normal">Администратор</h6>
      </div>
      <div class="card-body">
        <img src="/img/veapach.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Одмен и оцениватель треков</li>
          <li>Увлекается программированием</li>
          <li>(этот сайт писал сам)</li>
          <li>Иногда стримит</li>
        </ul>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h3 class="my-0 font-weight-normal">fakingteslazs</h3>
        <h6 class="my-0 font=weight-normal">Дизайнер</h6>
      </div>
      <div class="card-body">
        <img  width="100px" src="/img/fakingteslazs.jpg" class="img-thumbnail">
        <ul class="list-unstyled mt-3 mb-4">
          <li>Дизайнер нашего паблика</li>
          <li>Делает отличные мувики</li>
          <li>Также есть покупатели</li>
        </ul>
      </div>
    </div>
    </div>
    </div>
    <?php require "blocks/footer.php" ?>
  </body>
</html>
