<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medlem1.css">
    <title> Bliv medlem </title>
  </head>
    <body>

      <!--start of header-->
      <header>
        <div class="burgermenu">
            <i class="fas fa-bars"></i>
        </div>

        <div class="logo">
          <a href="#">
            <img src="img/logo.png" alt="">
          </a>
        </div>

        <div class="basket">
          Kurv
          <div class="circle">
            0
          </div>
        </div>
      </header>
      <script src="https://kit.fontawesome.com/9e13919a12.js" crossorigin="anonymous"></script>
      <!--end of header-->


      <!--start of bliv medlem form-->
      <form method="POST" action="form.php">
      <section class="login">
        <i class="far fa-user"></i>
        <p>Bliv medlem</p>

        <div class="navn">
          <input class="navn" type="fornavn" placeholder="Navn" name="fornavn" required>
          <input class="navn" type="efternavn" placeholder="Efternavn" name="efternavn" required>
        </div>

        <div class="input-form">
          <br>
          <input class="form" type="email" placeholder="Email" name="email" required>
          <br>
          <br>
          <input class="form" type="password" placeholder="Adgangskode" name="adgangskode" required>
          <br>
          <br>

          <input class="form" type="dato" placeholder="dd-mm-åååå" name="dato" required>
        </div>

        <div class="check">
          <input type="checkbox" name="remember"> Jeg acceptere vilkår og betingelser
        </div>


        <button type="submit" name="submit" class="blk-btn" value="send"> Bliv medlem </button>
        <br>
        <div class="glemt">
          <a href="login.html">Allerede medlem?</a>
        </div>
      </section>
      </form>
      <!--end of login form-->

      <!--start of bottom navigation-->
      <div class="bottom-nav">
        <a href="#">
          <i class="fas fa-store"></i>
        </a>
        <a href="#">
          <i class="fas fa-search"></i>
        </a>
        <a href="#">
          <i class="far fa-user"></i>
        </a>
        <a href="#">
          <i class="far fa-heart"></i>
        </a>
      </div>
      <!--end of bottom navigation-->

    </body>
</html>
