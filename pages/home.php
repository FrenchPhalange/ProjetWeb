<link rel="stylesheet" href="../css/home.css">
<?php

$_GLOBALS['login'] =  false;
$title = "Home Page";
include_once "../template/header.php";
include_once "../widgets/_AddMember.php";


?>
<div class="signin">
        <?php

        addMember();

        ?>
</div>
<main>
<!-- SECTION 1 -->
<section class="section section-1">
        <div class="left-section-1">
        <img src="img/intro.png" alt="" />
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
        <img src="img/section-2.jpg" alt="" />
        <div class="left-section-2">
          <p class="title-section-2">Bienvenue au centre de remise en forme</p>
          <p class="subtitle-section-2">
            Centre de remise en forme, piscine intérieure, pataugeoire, jacuzzi,
            hammam, sauna, douches de chocs, fontaines à neige, bain turc,
            salles de massage et quatre coiffeurs hommes-femmes dans notre
            établissement
          </p>
          <button class="read-more">lire la suite</button>
        </div>
      </section>
      <section id="intro"  class="section section-2a">
        <img src="img/plat-1.jpg" alt="" />
        <div class="left-section-2a">
          <p class="title-section-2a">Avec des recettes adaptées</p>
          <p class="subtitle-section-2a">
            Des plats faits spécialement pour vous,
            Pour vos envies, tout en restant diététique et gourmand. 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Similique in praesentium dicta totam deleniti
          </p>
          <button class="read-more">lire la suite</button>
        </div>
      </section>
      <section id="intro"  class="section section-2b">
        <img src="img/db2.jpg" alt="" />
        <div class="left-section-2b">
          <p class="title-section-2b">Avec des coachs diplomés</p>
          <p class="subtitle-section-2b">
            Des plats faits spécialement pour vous,
            Pour vos envies, tout en restant diététique et gourmand. 
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Similique in praesentium dicta totam deleniti
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique
            in praesentium dicta totam deleniti quibusdam soluta magni quo
            aliquid sit reiciendis maiores quos, esse, quae natus! Mollitia
            molestiae placeat quibusdam?
          </p>
          <button class="learn-more">Apprendre encore plus</button>
        </div>
        <div class="right-section-3">
          <div class="all-cards">
            <div class="part-1-section-3" data-aos="fade-up-right">
              <div class="card-info">
                <img src="img/l1.png" alt="" />
                <p class="title-card-info">Athlétisme</p>
                <p class="description-card-info">
                  Sample text. Click to select the box. Click again or double
                  click to start editing the text
                </p>
              </div>
              <div class="card-info">
                <img src="img/l4.png" alt="" />
                <p class="title-card-info">Aptitude</p>
                <p class="description-card-info">
                  Sample text. Click to select the box. Click again or double
                  click to start editing the text
                </p>
              </div>
            </div>
            <div class="part-2-section-3" data-aos="fade-up-right">
              <div class="card-info">
                <img src="img/l2.png" alt="" />
                <p class="title-card-info">Pilates</p>
                <p class="description-card-info">
                  Sample text. Click to select the box. Click again or double
                  click to start editing the text
                </p>
              </div>
              <div class="card-info">
                <img src="img/l3.png" alt="" />
                <p class="title-card-info">Cordes à sauter</p>
                <p class="description-card-info">
                  Sample text. Click to select the box. Click again or double
                  click to start editing the text
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECTION 3 -->

      <!-- SECTION 4 -->
      <section  id="caracteristics" class="section section-4">
        <div class="left-section-4">
          <img src="img/db3.jpg" alt="" />
          <img src="img/db2.jpg" alt="" />
        </div>
        <div class="right-section-4">
          <p class="title-section-4">
            Caractéristiques du centre de remise en forme
          </p>
          <p class="subtitle-section-4">
            Notre cente dispose d'une grande varieté d'équipements
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
        <img class="img-section-5" src="img/gym-1.jpg" alt="Gym" />
        <p class="text-section-5">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse fugiat
          aliquam officiis deleniti corporis dolorem id, rem repudiandae
          dignissimos sunt expedita unde maiores vel non nobis repellat. Hic,
          laboriosam dicta Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia ratione minus expedita veniam voluptate repellendus earum, perspiciatis tenetur omnis eos nam impedit numquam
        </p>
        <button class="learn-more">Apprendre encore plus</button>
      </section>
      <!-- SECTION 5 -->

      <!-- SECTION 7 -->
      <section  id="pictures'gym" class="section section-7">
        <p class="title-shape-health">Santé et Forme</p>
        <p class="subtitle-shape-health">
          Sample text. Click to select the box. Click again or double click to
          start editing the text
        </p>
        <img src="img/waves.png" alt="waves" class="waves" title="waves" />
        <div class="all-pictures">
          <img src="img/gym-2.jpg" alt="" />
          <img src="img/gym-3.jpg" alt="" />
          <img src="img/gym-1.jpg" alt="" />
          <img src="img/gym-4.jpg" alt="" />
          <img src="img/gym-5.jpg" alt="" />
          <img src="img/gym-6.jpg" alt="" />
          <img src="img/gym-7.jpg" alt="" />
          <img src="img/gym-8.jpg" alt="" />
          <img src="img/gym-9.jpg" alt="" />
        </div>
      </section>
      <!-- SECTION 7 -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../js/home.js"></script>
<?php
include_once "../template/footer.php";
?>