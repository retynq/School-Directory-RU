<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>School Directory RU</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="style/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    <script src="//code.jivo.ru/widget/49Lwh5ldTD" async></script>
</head>
<body>
   <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img src="https://media.discordapp.net/attachments/872029012006944809/1088339182163857438/643_20230323145111.png?width=1024&height=1024" style="height: 55px;">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.html" class="nav-link px-2 text-secondary">Главная</a></li>
          <li><a href="rasp.html" class="nav-link px-2 text-white">Расписания</a></li>
          <li><a href="events.html" class="nav-link px-2 text-white">Мероприятия</a></li>
          <li><a href="about.html" class="nav-link px-2 text-white">Про нас</a></li>
          <li><a href="otzyvy.html" class="nav-link px-2 text-white">Отзывы</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Найти..." aria-label="Search">
        </form>

        <div class="text-end">
          <a type="button" class="btn btn-outline-light me-2" href="login.php">Войти</a>
          <a type="button" class="btn" href="sign-up.php" style="background-color: purple; color: #fff;">Зарегистрироваться</a>
        </div>
      </div>
    </div>
  </header>
    <div class="main-div">
        <div id="carouselExampleCaptions" class="carousel slide" style="height: 760px; overflow: hidden;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://media.discordapp.net/attachments/872029012006944809/1088371371307970620/IMG_1701.jpg?width=1494&height=1120" class="d-block w-100" style="z-index: -1;">
                <div class="carousel-caption">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://media.discordapp.net/attachments/872029012006944809/1088371372297822218/IMG_1702.jpg?width=1494&height=1120" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://media.discordapp.net/attachments/872029012006944809/1088371373094744074/IMG_1703.jpg?width=1494&height=1120" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        <h2 style="margin-top: 100px; margin-left: 585px; font-weight: 700;" class="">Мероприятия</h2>
        <div class="card-container css-selector">
            <div class="txt-holder">
                <h3 style="font-weight: 700; margin-left: 10px;">Lorem ipsum dolor</h3>
                <p style="margin-left: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni ratione dignissimos facere, suscipit aperiam ab officia iusto amet deleniti placeat nostrum adipisci rem commodi voluptas voluptatem velit alias labore.</p>
                <a type="button" class="btn btn-outline-dark" style="margin-top: 20px; margin-left: 10px;" href="events.html">Подробнее</a>
            </div>
            <div class="img-holder">
                <img src="https://shorthaircatbreeds.com/wp-content/uploads/2020/05/Petting-a-cats-head.jpg">
            </div>
        </div>
        <div class="card-container css-selector2 mt-3">
            <div class="img-holder2">
                <img src="https://shorthaircatbreeds.com/wp-content/uploads/2020/05/Petting-a-cats-head.jpg">
            </div>
            <div class="txt-holder2">
                <h3 style="font-weight: 700; margin-left: 10px;">Lorem ipsum dolor</h3>
                <p style="margin-left: 10px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni ratione dignissimos facere, suscipit aperiam ab officia iusto amet deleniti placeat nostrum adipisci rem commodi voluptas voluptatem velit alias labore.</p>
                <a type="button" class="btn btn-outline-dark" style="margin-top: 20px; margin-left: 10px;" href="events.html">Подробнее</a>
            </div>
        </div>
        <h1 style="margin-top: 100px; margin-left: 600px; font-weight: 700;">Новости</h1>
        <div class="news-body">
            <div class="news-container">
                <div class="news-card">
                    <div class="content">
                        <h2>Заголовок</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia debitis magnam iure, quisquam laudantium eveniet hic, laborum nemo</p>
                        <a href="news.html">Подробнее</a>
                    </div>
                    <img src="https://media.discordapp.net/attachments/872029012006944809/1087979852772167810/641_20230322150313.png?width=1120&height=1120">
                </div>
            </div>
            <?php function generation_posts_index ($mysqli) {
      $sql = "SELECT * FROM `articles`";
      $res = $mysqli -> query($sql);
      if ($res -> num_rows > 0) {
          while ($resArticle = $res -> fetch_assoc()) {
            ?>
            <div class="news-container">
                <div class="news-card">
                    <div class="content">
                        <h2><a href="post.php?id_article=<?= $resArticle['id'] ?>"> <?= $resArticle['title']?></a></h2>
                        <p><?= mb_substr($resArticle['text'], 0, 158, 'UTF-8') ?> </p>
                        <a href="news.html">Подробнее</a>
                    </div>
                    <img src="https://media.discordapp.net/attachments/872029012006944809/1087986861168939048/642_20230322153104.png?width=1120&height=1120">
                </div>
            </div>
            <?php
              }
    } else {
        // Если нет статей то выводим надпись
        echo "Нет статей";
    }
}
  ?>
        <h1 style="font-weight: 700; margin-left: 560px;">Расписание</h1>
        <div class="mx-auto" style="height: 600px; width: 80%;">
            <div class="d-flex">
                <div class="card" style="width: 18rem; max-height: 460px; margin-left: 20px;">
                    <a class="gradientimg"><img src="https://i.pinimg.com/originals/db/38/90/db3890d547805982b968202300b22731.jpg" class="card-img-top" alt="..." style="max-height: 250px; max-width: 300px; overflow: hidden;"></a>
                    <div class="card-body">
                      <h5 class="card-title">Расписание 1/2 смены</h5>
                      <p class="card-text">Расписание уроков 1/2 смены на эту неделю</p>
                      <button class="purple-btn" href="#">Посмотреть</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem; max-height: 460px; margin-left: 50px;">
                  <a class="gradientimg"><img src="https://i.pinimg.com/originals/db/38/90/db3890d547805982b968202300b22731.jpg" class="card-img-top" alt="..." style="max-height: 250px; max-width: 300px; overflow: hidden;"></a>                    <div class="card-body">
                      <h5 class="card-title">Расписание кружков</h5>
                      <p class="card-text">Расписание кружков на эту неделю</p>
                      <button class="purple-btn" href="#">Посмотреть</button>
                    </div>
                </div>
                <div class="card" style="width: 18rem; max-height: 460px; margin-left: 50px;">
                  <a class="gradientimg"><img src="https://i.pinimg.com/originals/db/38/90/db3890d547805982b968202300b22731.jpg" class="card-img-top" alt="..." style="max-height: 250px; max-width: 300px; overflow: hidden;"></a>                    <div class="card-body">
                      <h5 class="card-title">Расписание мероприятий</h5>
                      <p class="card-text">Расписание различных мероприятий на эту неделю</p>
                      <button class="purple-btn" href="#">Посмотреть</button>
                    </div>
                </div>
            </div>
            <a href="#" class="link-a text-dark fs-4 d-block" style="margin-left: 350px; font-weight: 700; margin-top: 50px;">Посмотреть другие расписания</a>
        </div>
        <footer class="footer">
          <div class="container-footer">
            <div class="row">
              <div class="footer-col">
                <h4>Сайт</h4>
                <ul>
                  <li><a href="#">О нас</a></li>
                  <li><a href="#">Политика конфиденциальности</a></li>
                  <li><a href="#">Партнерская программа</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Навигация</h4>
                <ul>
                  <li><a href="#">Главная</a></li>
                  <li><a href="#">Мероприятия</a></li>
                  <li><a href="#">Отзывы</a></li>
                  <li><a href="#">Новости</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>Контакты</h4>
                <ul>
                  <li><a href="#">Почта</a></li>
                  <li><a href="#">Номер</a></li>
                  <li><a href="#">Дискорд</a></li>
                </ul>
              </div>
            </div>
          </div>
       </footer>
    </div>  
    <script>
        const postcss  = require('postcss-js')
const prefixer = postcss.sync([ require('autoprefixer') ])

prefixer({ display: 'flex' }) //=> { display: ['-webkit-box', '-webkit-flex', '-ms-flexbox', 'flex'] }
        import throttle from "https://cdn.skypack.dev/lodash@4/throttle";
    </script>
</body>
</html>