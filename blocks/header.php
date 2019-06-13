<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <a href="https://vk.com/nazacen" target="_blank"><img class="mr-2" src="img/ava.jpg" alt="" width="50" height="50"></a>
  <h5 class="my-0 mr-md-auto font-weight-normal">На Зацен</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="/">Главная</a>
    <a class="p-2 text-dark" href="/about.php">Написать нам</a>
  </nav>
  <?php
    if($_COOKIE['user'] == 'Да'):
  ?>
  <a class="btn btn-outline-primary" href="/auth.php">Кабинет</a>
  <?php else: ?>
  <a class="btn btn-outline-primary" href="/auth.php">Войти</a>
  <?php endif; ?>
</div>
