<?php
require_once "../utils/functions.php";
require_once "../widgets/_Login.php";
$error = "";

if (isset($_GET['sub_login'])) {
  if (LoginHome($_GET['user'], $_GET['pass'])) {
    header("Location: /pages/admin.php?admin=sudo");
  } else {
    header("Location: /pages/home.php");
  }
}

?>
<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barrel & fit’</title>
  <link rel="stylesheet" href="/css/machinestyle.css" />
  <link rel="stylesheet" href="/css/machinestyle-responsive.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
</head>

<body class="container">
<header id="top">
      <menu>
        <a href="/pages/home.php" class="link">Home</a>
        <a href="/pages/piscine.php" class="link">Piscine</a>
        <a href="/pages/fitness.php" class="link">Fitness</a>
        <a href="/pages/machines.php" class="link">Machines</a>
      </menu>
      <a class="logo-website" href="index.html">
        <img
          src="../css/img/Logo.png"
          alt="logo website (stay strong)"
          title="logo website (stay strong)"
        />
      </a>
      <i class="fas fa-bars"></i>
      <?php
      TestLog($_GLOBALS['login']);
      ?>
  <div class="form-login">
    <form action="" method="get" class="">
      <input type="text" name="user" required>
      <input type="password" name="pass" required>
      <button name="sub_login">Login</button>
    </form>
  </div>
    </header>

<main>
      <!-- SECTION 1 -->
      <section class="section section-1">
        <div class="left-section-1">
          <img src="/css/img/intro.png" alt="" />
        </div>
        <div class="right-section-1">
          <p class="title-section-1">Entraînements personnels</p>
          <p class="subtitle-section-1">Nouveau niveau</p>
          <p class="text-section-1">
            Avez-vous besoins d'aide pour atteindre vos objectifs de mise en
            forme ? Cliquez pour voir pourquoi un entraîneur personnel pourrait
            être la réponse, avec des informations sur les prix, les avantages
            et plus encore.
          </p>
          <button class="learn-more">Apprendre encore plus</button>
        </div>
      </section>
      <!-- SECTION 1 -->

      <!-- SECTION 2 -->
      <section id="intro"  class="section section-2">
        <img src="/css/img/gym-1.jpg" alt="" />
        <div class="left-section-2">
          <p class="title-section-2">Les machines</p>
          <p class="subtitle-section-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eaque! Reiciendis neque ab harum, unde voluptatum ipsum at aliquid praesentium nesciunt, dicta perspiciatis architecto consequuntur libero quasi magnam natus. Cumque.
          </p>
          <button class="read-more">lire la suite</button>
        </div>
      </section>
     
      <!-- SECTION 2 -->
      <!-- SECTION 3 -->
      <section id="infos" class="section section-3">
          <h2>Nos coachs</h2>
          <div>
        <div class="right-section-3">
          <div class="all-cards">
            <div class="part-1-section-3" data-aos="fade-up-right">
              <div class="card-info-page2">
                <img src="../css/img/coach6.jpg" alt="" />
                <p class="title-card-info">Kota Phaiminin</p>
                <p class="description-card-info">
                  - Diplomé par l’Etat <br>
                  - Specialité: plateau cardio
                </p>
              </div>
            </div>
            <div class="part-2-section-3" data-aos="fade-up-right">
              <div class="card-info-page2">
                <img src="../css/img/coach7.jpg" alt="" />
                <p class="title-card-info">Martin Matin</p>
                <p class="description-card-info">
                  -Diplomé par l’Etat <br>
                  -specialité: plateau muscu
                </p>
              </div>
            </div>
            <div class="part-3-section-3" data-aos="fade-up-right">
              <div class="card-info-page2">
                <img src="../css/img/coach8.jpg" alt="" />
                <p class="title-card-info">Juste Leblanc</p>
                <p class="description-card-info">
                  -Diplomé par l’Etat <br>
                  -specialité: tonification musculaire
                </p>
              </div>
            </div>
            <div class="part-3-section-3" data-aos="fade-up-right">
                <div class="card-info-page2">
                  <img src="../css/img/coach9.jpg" alt="" />
                  <p class="title-card-info">Hubert Bonisseur de La Bath</p>
                  <p class="description-card-info">
                    -Diplomé par l’Etat <br>
                    -specialité: tonification musculaire
                  </p>
                </div>
              </div>
          </div>
        </div>
    </div>
      </section>
      <!-- SECTION 3 -->

      <!-- SECTION 4 -->
      <section id="intro"  class="section section-2">
        <img src="../css/img/gym-7.jpg" alt="" />
        <div class="left-section-2">
          <p class="title-section-2">Notre salle est:</p>
          <p class="subtitle-section-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eaque! Reiciendis neque ab harum, unde voluptatum ipsum at aliquid praesentium nesciunt, dicta perspiciatis architecto consequuntur libero quasi magnam natus. Cumque.
          </p>
          <button class="read-more">lire la suite</button>
        </div>
      </section>
      <!-- SECTION 4 -->

      <!-- SECTION 5 -->
      <section id="discover" class="section section-5">
        <p class="title-section-5">Nos horaire</p>
        <table>
          <caption>*Tout les Lundis et Samedis de --H à --H, sauf jour férié</caption>
          <tr>
              <th scope="col"></th>
              <th scope="col">Lundi</th>
              <th scope="col">Mardi</th>
              <th scope="col">Mercredi</th>
              <th scope="col">Jeudi</th>
              <th scope="col">Vendredi</th>
              <th scope="col">Samedi</th>
              <th scope="col">Dimanche</th>
          </tr>
          <tr>
              <th scope="row">9h-10h</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row">10h-11h</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
              <th scope="row">11h-12h</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          <tr>
            <th scope="row">*</th>
            <td</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">14h-15h</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">15h-16h</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">16h-17h</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">17h-18h</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th scope="row">18h-19h</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
      </table>
      </section>
      <!-- SECTION 5 -->

      <!-- SECTION 7 -->
      <section  id="pictures'gym" class="section section-7">
        <h2>Vous voulez un coach pour vous aider ?</h2>
        <div class="dual">
            <div class="Sceancetext">
                <p>Une scéance avec un coach peut vous aider à:</br></p>
                <p class="textSceancetext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore doloremque ut id temporibus omnis nostrum, minus ipsam facilis odio doloribus ipsum molestias aut, sed tempora blanditiis eveniet repudiandae, voluptatum explicabo.</p>
                <button class="read-more">lire la suite</button>
            </div>
            <div class="ReserveCard">
                <img src="../css/img/coaching.jpg" alt="" class="imgResever"/>
                <p class="Reserve">Reserve now</p>
            </div>
        </div>

      </section>
      <!-- SECTION 7 -->
    
    </main>
<?php
include_once "../template/footer.php";
?>