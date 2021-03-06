<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="medlem.css">
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
      <form class="login" method="POST" action="medlem.php">
        <i class="far fa-user"></i>
        <h1>Bliv medlem</h1>

        

        <div class="input-form">
          <label for="navn"><p>Fornavn:</p></label>
          <input class="form" type="text" placeholder="Navn" name="navn" required>
          <br>
          <br>
          <label for="efternavn"><p>Efternavn:</p></label>
          <input class="form" type="text" placeholder="Efternavn" name="efternavn" required>
          <br>
          <br>
          <label for="email"><p>Email:</p></label>
          <input id="email" class="form" type="text" placeholder="Email" name="email" required>
          <br>
          <br>
          <label for="psw"><p>Adgangskode:</p></label>
          <input id="psw" class="form" type="password" placeholder="Adgangskode" name="psw" required>
          <br>
          <br>
          <label for="dato"><p>Dato:</p></label>
          <input id="dato" class="form" type="text" placeholder="dd/mm/åååå" name="dato" required>
        </div>

        <div class="check">
          <input type="checkbox" name="remember"> Jeg accepterer vilkår og betingelser
        </div>

        <button type="submit" name="button" class="blk-btn"> Bliv medlem </button>
        <br>

      </form>

      <form method="POST" action="medlem.php">
        <input type="text" id="test" name="test">
        <input type="submit" value="send" name="submit">
      </form>

      <?php 
        //Set up variables
        $server = "localhost";
        $user = "root";
        $pw = "";
        $db = "tantegrøn";

          // Create connection
        $conn = new mysqli($server, $user, $pw, $db);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        } 
        echo "Connected successfully";

        if (isset($_POST['test'])){
          $cheese = $_POST['test'];

          $sql = "INSERT INTO test (test) VALUES ('$cheese')";
          if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          $conn->close();

        }


      ?>
      
        <div class="glemt login" >
          <a href="login.html">Allerede medlem?</a>
        </div>
      <!--end of login form-->

      <div style="padding: 30px;"></div>


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
