<php include 'connect.php'; if(isset($_POST['submit'])) { $name =
$_POST['emri']; $email = $_POST['email']; $mosha = $_POST['mosha']; $sql =
"INSERT INTO users (emri, email, mosha) VALUES ('$name', '$email', '$mosha')";
if ($conn->query($sql) === TRUE) { echo "New record created successfully"; }
else { echo "Error: " . $sql . "<br />" . $conn->error; } $conn->close(); }
if(isset($_POST['submit'])) { $name = $_POST['emri']; $email = $_POST['email'];
$age = $_POST['mosha']; $sql = "INSERT INTO users (name, email, mosha) VALUES
('$name', '$email', '$age')"; if ($conn->query($sql) === TRUE) { echo "New
record created successfully"; } else { echo "Error: " . $sql . "<br />" .
$conn->error; } $conn->close(); } f(isset($_POST['submit'])) { $name =
$_POST['name']; $email = $_POST['email']; $mosha = $_POST['mosha']; $sql =
"UPDATE users SET emri='$name', email='$email', mosha='$phone' WHERE
email='$email'"; if ($conn->query($sql) === TRUE) { echo "Record updated
successfully"; } else { echo "Error: " . $sql . "<br />" . $conn->error; }
$conn->close(); } $id = $_GET['id']; $sql = "DELETE FROM users WHERE id='$id'";
if ($conn->query($sql) === TRUE) { echo "Record deleted successfully"; } else {
echo "Error deleting record: " . $conn->error; } $conn->close(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="udhetimemeairoplan.css" type="text/css" />
    <link
      rel=" stylesheet"
      href="responsiveudhetimemeautobus.css"
      type="text/css"
    />
    <title>Paketohu + Nisu/Udhetime me Avion</title>
  </head>
  <body>
    <header class="navbar">
      <ul class="navbar-links">
        <a href=""><img src="images\logo.png" alt="" id="logo" /></a>
        <li class="nav"><a class="link" href="#">Home</a></li>
        <li class="nav"><a href="#" class="link">Pushime</a></li>
        <li class="nav"><a href="#" class="link">Udhetime me Autobus</a></li>
        <li class="nav">
          <a href="udhetimemeairoplan.html" class="active link"
            >Udhetime me Avion</a
          >
        </li>
        <li class="nav"><a href="#" class="link">Rreth Nesh</a></li>
        <li class="nav"><a href="#" class="link">Kontakti</a></li>
        <button class="hamburger">
          <a href="" class="link"><i class="fa faIcon">&#xf2c0;</i></a>
          <div class="mobile-menu">
            <a class="active link" href="#">Home</a>
            <a class="link" href="#">Pushime</a>
            <a class="link" href="#">Udhetime me Autobus</a>
            <a class="link" href="#">Udhetime me Avion</a>
            <a class="link" href="#">Rreth Nesh</a>
            <a class="link" href="#">Kontakti</a>
          </div>
        </button>
      </ul>
    </header>

    <div class="video">
      <video autoplay muted loop id="myVideo">
        <source
          src="C:\Users\HP\Downloads\AirplaneWindow.crdownload"
          type="video/mp4"
        />
      </video>
    </div>

    <div class="qoute">
      <h2 id="quote1">
        "Avioni na ka afruar më shumë së bashku, dhe avioni mund të ndihmojë të
        na afrojë edhe më shumë së bashku."
      </h2>
    </div>

    <div class="traveling">
      <h1 id="traveling2">Destinacione</h1>
      <h3 id="slogan">Ne bëjm planin. Ju paketoni valixhet.</h3>

      <div class="offer">
        <img src="images\paris.webp" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 4 ditë
          <i class="fa">&#xf2c0;</i> 30
        </p>
        <h3 class="Text">Udhëtim në Paris</h3>
        <hr />
        <p>
          From: 399<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer2">
        <img src="images/Madrid.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 3 ditë
          <i class="fa">&#xf2c0;</i> 10
        </p>
        <h3 class="Text">Udhetim ne Madrid</h3>
        <hr />
        <p>
          From: 300<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer3">
        <img src="images\stamboll.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 3 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në Stamboll</h3>
        <hr />
        <p>
          From: 319<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer4">
        <img src="images\Bangkok.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 3 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në Bangkok</h3>
        <hr />
        <p>
          From: 450<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer5">
        <img src="images\NewYork.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 4 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në New York</h3>
        <hr />
        <p>
          From: 600<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer6">
        <img src="images\Tokyo.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 5 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në Tokyo</h3>
        <hr />
        <p>
          From: 600<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button>></a>
        </p>
      </div>

      <div class="offer7">
        <img src="images\Dubai.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 4 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në Dubai</h3>
        <hr />
        <p>
          From: 500<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer8">
        <img src="images\London.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 5 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në Londer</h3>
        <hr />
        <p>
          From: 530<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>

      <div class="offer9">
        <img src="images\Capadocia.jpg" alt="" class="pic" />
        <p>
          <i class="fa fa-calendar" aria-hidden="true"></i> 5 ditë
          <i class="fa">&#xf2c0;</i> 24
        </p>
        <h3 class="Text">Udhëtim në Chicago</h3>
        <hr />
        <p>
          From: 530<i class="fa fa-eur" aria-hidden="true"></i>
          <a href="#" id="reserve"><button>Rezervo Tani</button></a>
        </p>
      </div>
    </div>

    <footer>
      <div class="row">
        <div class="col">
          <img src="images\logo.png" alt="" id="footerPhoto" />
          <p class="footerText">
            Agjensioni Paketohu + Nisu ju mundëson të vizitoni çdo atraksion
            turistik në Kosovë dhe botë. Gjithashtu ofrojmë shërbimin VIP të
            transportit të udhëtarëve me mjetet më të reja dhe komode të
            transportit.
          </p>
          <div class="social-icons">
            <i class="fa fa-facebook-square fa2" aria-hidden="true"></i>
            <i class="fa fa-instagram fa2" aria-hidden="true"></i>
            <i class="fa fa-twitter fa2" aria-hidden="true"></i>
          </div>
        </div>
        <div class="col">
          <h3 class="footerText">Kontakti</h3>
          <p class="footerText">
            <i class="fa fa-map-marker fa1" aria-hidden="true"></i> Dardani -
            Prishtine
          </p>
          <p class="footerText">
            <i class="fa fa-phone fa1" aria-hidden="true"></i> +383 49 101 101
          </p>
          <p class="email-id footerText">
            <i class="fa fa-envelope-o fa1" aria-hidden="true"></i>
            info@paketohu-nisu.ks
          </p>
        </div>
        <div class="col">
          <h3 class="footerText services">Sherbimet</h3>
          <ul class="footerList">
            <li><a href="" class="footerLi">Rreth Nesh</a></li>
            <li><a href="" class="footerLi">Udhetime me Airoplan</a></li>
            <li><a href="" class="footerLi">Udhetime me Autobus</a></li>
            <li><a href="" class="footerLi">Pushime</a></li>
            <li><a href="" class="footerLi">Kontakti</a></li>
          </ul>
        </div>
        <div class="col">
          <h3 class="footerText">Ofertat e Paketohu + Nisu</h3>
          <form>
            <p class="footerText">Regjistrohu per te marrë ofertat tona.</p>
            <input
              type="email"
              placeholder="Shkruaj Email"
              class="email"
            /><br />
            <button class="submit">
              Regjistrohu
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
      <hr />
      <p class="copyright">Paketohu + Nisu - All Rights Reserved</p>
    </footer>
    <script>
      "javaScript\responsive.js";
    </script>
  </body>
</html>
