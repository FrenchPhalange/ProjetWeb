<link rel="stylesheet" href="../css/home.css">
<?php

$_GLOBALS['login'] =  false;
$title = "Home Page";
include_once "../template/header.php";

?>
<main>

  <!-- SECTION 1 -->
  <section class="section section-1">
    <div class="left-section-1">
      <img src="../img/intro.png" alt="" />
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
  <section id="intro" class="section section-2">
    <img src="../img/section-2.jpg" alt="" />
    <div class="left-section-2">
      <p class="title-section-2">Bienvenue au centre de remise en forme</p>
      <p class="subtitle-section-2">
        Centre de remise en forme, piscine intérieure, pataugeoire, piscine
        exterieur, salle de fitness et salle des machines guidé dans notre
        établissement.
      </p>
      <button class="read-more">lire la suite</button>
    </div>
  </section>
  <section id="intro" class="section section-2a">
    <img src="../img/plat-1.jpg" alt="" />
    <div class="left-section-2a">
      <p class="title-section-2a">Avec des recettes adaptées</p>
      <p class="subtitle-section-2a">
        Des plats faits spécialement pour vous,
        Pour vos envies, tout en restant diététique et gourmand.
        Recette spécialement préparé par Marmiton !
      </p>
      <button class="read-more">lire la suite</button>
    </div>
  </section>
  <section id="recipes" class="section section-2ab">
    <img src="<?php findAPi("strMealThumb"); ?>" alt="" />
    <div class="left-section-2ab">
      <p class="title-section-2ab"><i><?php findAPi("strMeal"); ?></i></p>
      <p class="subtitle-section-2ab">
        <i>Recettes & Ingrédients : <a href="<?php findAPi("strYoutube"); ?>" target="_blank">ici</a></i>
      </p>
      <button class="read-more generator-recipe"><a href="#recipes" style="color:var(--color-primary);">Générer un autre plat</a></button>
    </div>
  </section>
  <section id="intro" class="section section-2b">
    <img src="../img/db2.jpg" alt="" />
    <div class="left-section-2b">
      <p class="title-section-2b">Avec des coachs diplomés</p>
      <p class="subtitle-section-2b">
        Des coachs diplomés et entousiaste pour vos objectifs:</br>
        -perte de poid</br>
        -prise de masse</br>
        -seche /régime</br>
        -motivations</br>
        -performance</br>
        -confiance en soi
      </p>
      <button class="read-more">DECOUVREZ NOS COACHS</button>
    </div>
  </section>
  <!-- SECTION 2 -->

  <!-- SECTION 3 -->
  <section id="infos" class="section section-3">
    <div class="left-section-3">
      <p class="title-section-3">à propos de nous</p>
      <p class="subtitle-section-3">
        Informations sur le centre de remise en forme
      </p>
      <p class="text-section-3">
        Nous sommes une salle de sport créée par des passionnés le 30 avril 2000 en tant que groupe d’amis.
        Nous avons depuis bien avancé et sommes heureux de vous dire que nous sommes l’une des meilleures salles de sport de la région depuis.
        Rejoignez-nous et continuons le sport ensemble.</br>
        -Barell&fit’
      </p>
      <button class="learn-more">Apprendre encore plus</button>
    </div>
    <div class="right-section-3">
      <div class="all-cards">
        <div class="part-1-section-3" data-aos="fade-up-right">
          <div class="card-info">
            <img src="../img/l1.png" alt="" />
            <p class="title-card-info">Fitness</p>
            <p class="description-card-info">
            Venez vous détendre après une longue journée de fitness dans notre salle.
            </p>
          </div>
          <div class="card-info">
            <img src="../img/l4.png" alt="" />
            <p class="title-card-info">Aptitude</p>
            <p class="description-card-info">
              Améliorez vos aptitudes avec un équipement de pointe !
            </p>
          </div>
        </div>
        <div class="part-2-section-3" data-aos="fade-up-right">
          <div class="card-info">
            <img src="../img/l2.png" alt="" />
            <p class="title-card-info">Pilates</p>
            <p class="description-card-info">
              Venez vous détendre après une longue journée dans notre nouvelle salle.
            </p>
          </div>
          <div class="card-info">
            <img src="../img/l3.png" alt="" />
            <p class="title-card-info">Cordes à sauter</p>
            <p class="description-card-info">
              Faites de la corde à sauter SPORTIF !
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION 3 -->

  <!-- SECTION 4 -->
  <section id="caracteristics" class="section section-4">
    <div class="left-section-4">
      <img src="../img/db3.jpg" alt="" />
      <img src="../img/db2.jpg" alt="" />
    </div>
    <div class="right-section-4">
      <p class="title-section-4">
        Caractéristiques du centre de remise en forme
      </p>
      <p class="subtitle-section-4">
        Notre centre dispose d'une grande varieté d'équipements
        cardiovasculaires et de résistance, notamment :
      </p>
      <div class="characteristics-section-4">
        <div class="part-1-section-4"></div>
        <div class="part-2-section-4">
          <p class="title-part-2-section-2">
            Nos accessoires d'entraînement comprennent :
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION 4 -->

  <!-- SECTION 5 -->
  <section id="discover" class="section section-5">
    <p class="title-section-5">Grandir avec nous</p>
    <img class="img-section-5" src="../img/gym-1.jpg" alt="Gym" />
    <p class="text-section-5">
      Tous nos clubs à Perpignan sont spécialement dédiés au sport et à votre bien-être. Vous bénéficiez des avantages suivants : programmes d'entraînement gratuits pour sportifs débutants et confirmés, douches gratuites, etc. Après votre entraînement, venez vous relaxer dans un fauteuil de massage ou consommer une boisson rafraîchissante dans le coin détente.
    </p>
    <button class="learn-more">Apprendre encore plus</button>
  </section>
  <!-- SECTION 5 -->

  <!-- SECTION 7 -->
  <section id="pictures'gym" class="section section-7">
    <p class="title-shape-health">Santé et Forme</p>
    <p class="subtitle-shape-health">
      Le plus important, c'est la Santé !
    </p>
    <img src="../img/waves.png" alt="waves" class="waves" title="waves" />
    <div class="all-pictures">
      <img src="../img/gym-2.jpg" alt="" />
      <img src="../img/gym-3.jpg" alt="" />
      <img src="../img/gym-1.jpg" alt="" />
      <img src="../img/gym-4.jpg" alt="" />
      <img src="../img/gym-5.jpg" alt="" />
      <img src="../img/gym-6.jpg" alt="" />
      <img src="../img/gym-7.jpg" alt="" />
      <img src="../img/gym-8.jpg" alt="" />
      <img src="../img/gym-9.jpg" alt="" />
    </div>
  </section>
  <!-- SECTION 7 -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="../js/home.js"></script>
  <?php
  include_once "../template/footer.php";
  ?>