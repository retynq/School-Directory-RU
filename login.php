<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link href="style/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src='main.js'></script>

</head>
<body>
<section class="vh-100" style="background-color: #eee; ">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-6 order-2 order-lg-1">
                <p class="text-center h2 fw-bold mb-5 mx-1 mx-md-4 mt-4">Вход в аккаунт</p>
                <form class="mx-1 mx-md-4" action="inc/signin.php" method="post">
                      <label class="form-label" for="form3Example1c">Логин</label>
                      <input type="text" name="login" id="form3Example1c" class="form-control" placeholder="Введите свой логин"/>
                      <label class="form-label" for="form3Example3c">Пароль</label>
                      <input type="password" name="password" id="form3Example3c" class="form-control" placeholder="Введите пароль"/>
                      <button type="submit" class="btn btn-outline-primary btn-lg" style="width: 385px; margin-top: 15px;">Войти</button>
                  <p>
                    У вас нет аккаунта? - <a href="sign-up.php">зарегистрируйтесь</a>
                  </p>
                  <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
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