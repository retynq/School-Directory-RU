<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src='main.js'></script>
</head>
<body>
<section style="background-color: #eee; height: 1000px;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">
                <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-3">Зарегистрироваться</p>
                <form class="mx-1 mx-md-4" action="vendor/signup.php" method="post" enctype="multipart/form-data">
                  <label class="form-label mt-2" for="form3Example1c">ФИО</label>
                  <input type="text" name="full_name" id="form3Example1c" class="form-control" placeholder="Введите свое полное имя"/>
                  <label class="form-label mt-2" for="form3Example1c">Логин</label>
                  <input type="text" name="login" id="form3Example1c" class="form-control" placeholder="Введите свой логин"/>
                  <label class="form-label mt-2" for="form3Example1c">Почта</label>
                  <input type="email" name="email" id="form3Example1c" class="form-control" placeholder="Введите адрес своей почты"/>
                  <label class="form-label mt-2" for="form3Example1c">Изображение профиля</label>
                  <input type="file" name="avatar" id="form3Example1c" class="form-control"/>
                  <label class="form-label mt-2" for="form3Example3c">Пароль</label>
                  <input type="password" name="password" id="form3Example3c" class="form-control" placeholder="Введите пароль"/>
                  <label class="form-label mt-2" for="form3Example4cd">Подтверждение пароля</label>
                  <input type="password" name="password-confirm" id="form3Example4cd" class="form-control" placeholder="Подтвердите свой пароль"/>
                  <button type="button" class="btn btn-primary btn-lg mt-3 mb-1">Создать аккаунт</button>
                  <p>
                    У вас уже есть аккаунт? - <a href="login.php">авторизируйтесь</a>
                  </p>
                  <p class="msg">
                    какое то сообщение 
                  </p>
                </form>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                  class="img-fluid" alt="Фотография">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>