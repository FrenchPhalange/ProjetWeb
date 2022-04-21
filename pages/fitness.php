<link rel="stylesheet" href="../css/home.css">
<?php 
$_GLOBALS['login']=  false;
$title = "Fitness Page";
include_once "../template/header.php";
?>
<main>
          <!-- SECTION 2 -->
          <section id="intro"  class="section section-2">
        <img src="../img/fitness.jpg" alt="" />
        <div class="left-section-2">
          <p class="title-section-2">Fitness</p>
          <p class="subtitle-section-2">
            Venez rejoindre nos cours de fitness.
            Tout les lundi et samedi (voir le planning pour plus de précision),
            soyez coacher par Celia, Priscilia
            et Julien. N’ayez pas peur et vener suer
            avec nous !
          </p>
          <button class="read-more">lire la suite</button>
        </div>
      </section>
      <!-- SECTION 2 -->

      <!-- SECTION 3 -->
      <section id="infos" class="section section-3">
        <div class="right-section-3">
          <div class="all-cards">
            <div class="part-1-section-3" data-aos="fade-up-right">
              <div class="card-info-page2">
                <img src="../img/coach1.jpg" alt="" />
                <p class="title-card-info">Julien Stephen</p>
                <p class="description-card-info">
                  - Diplomé par l’Etat <br>
                  - Specialité: plateau cardio
                </p>
              </div>
            </div>
            <div class="part-2-section-3" data-aos="fade-up-right">
              <div class="card-info-page2">
                <img src="../img/coach3.jpg" alt="" />
                <p class="title-card-info">Celia Cazo</p>
                <p class="description-card-info">
                  -Diplomé par l’Etat <br>
                  -specialité: plateau muscu
                </p>
              </div>
            </div>
            <div class="part-3-section-3" data-aos="fade-up-right">
              <div class="card-info-page2">
                <img src="../img/coach2.jpg" alt="" />
                <p class="title-card-info">Priscilia Coven</p>
                <p class="description-card-info">
                  -Diplomé par l’Etat <br>
                  -specialité: tonification musculaire
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- SECTION 3 -->
      <!-- SECTION 4 -->
      <section id="intro"  class="section section-2">
        <img src="../img/fitness2.jpg" alt="" />
        <div class="left-section-2">
          <p class="title-section-2">Pourquoi le faites-vous ?</p>
          <p class="subtitle-section-2">   
            Pour atteindre votre objectif ? Pour passer un bon moment entre amis ? Quelle que soit votre raison, le fitness est essentiel. Qu'il s'agisse d'une séance cardio, un cours collectifs, que vous soyez débutant ou confirmé. Qui que vous soyez, quel que soit votre niveau, nous sommes ouverts à tous ! Go For It.
          </p>
          <button class="read-more">lire la suite</button>
        </div>
      </section>
      <!-- SECTION 4 -->
      <!-- SECTION 5 -->
      <section id="discover" class="section section-5">
        <p class="title-section-5">Le Planning</p>
        <table>
          <caption>      *Tout les Lundis et Samedis de 9H à 19H, sauf jour férié
          </caption>
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
              <td class="coach1">Julien</td>
              <td></td>
              <td class="coach3">Celia</td>
              <td></td>
              <td class="coach2">Priscilia</td>
              <td></td>
              <td class="coach1">Julien</td>
          </tr>
          <tr>
              <th scope="row">10h-11h</th>
              <td class="coach1">Julien</td>
              <td class="coach2">Priscilia</td>
              <td class="coach3">Celia</td>
              <td class="coach1">Julien</td>
              <td class="coach2">Priscilia</td>
              <td class="coach3">Celia</td>
              <td class="coach1">Julien</td>
          </tr>
          <tr>
              <th scope="row">11h-12h</th>
              <td></td>
              <td class="coach2">Priscilia</td>
              <td></td>
              <td class="coach1">Julien</td>
              <td></td>
              <td class="coach3">Celia</td>
              <td></td>
          </tr>
          <tr>
            <th scope="row">*</th>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
          </tr>
          <tr>
            <th scope="row">*</th>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
            <td>*</td>
          </tr>
          <tr>
            <th scope="row">15h-16h</th>
            <td class="coach2">Priscilia</td>
            <td></td>
            <td class="coach1">Julien</td>
            <td></td>
            <td class="coach3">Celia</td>
            <td></td>
            <td class="coach2">Priscilia</td>
          </tr>
          <tr>
            <th scope="row">16h-17h</th>
            <td class="coach2">Priscilia</td>
            <td class="coach3">Celia</td>
            <td class="coach1">Julien</td>
            <td class="coach2">Priscilia</td>
            <td class="coach3">Celia</td>
            <td class="coach1">Julien</td>
            <td class="coach2">Priscilia</td>
          </tr>
          <tr>
            <th scope="row">17h-18h</th>
            <td></td>
            <td class="coach3">Celia</td>
            <td></td>
            <td class="coach2">Priscilia</td>
            <td class="coach3">Celia</td>
            <td class="coach1">Julien</td>
            <td class="coach2">Priscilia</td>
          </tr>
          <tr>
            <th scope="row">18h-19h</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="coach1">Julien</td>
            <td></td>
          </tr>
      </table>
      </section>
      <!-- SECTION 5 -->
      <!-- SECTION 6 -->
      <section id="intro"  class="section section-page2">
        <div class="left-section-page2">
          <p class="title-section-page2">Inscription</p>
          <p class="subtitle-section-page2">
            Si vous souhaiter vous inscrire pour le prochain cours de fitness, c’est ici:
          </p>
          <button class="read-more-page2">Julien</button>
          <button class="read-more-page2">Celia</button>
          <button class="read-more-page2">Priscilia</button>
          <p class="subtitle-section-page22">
            Place restantes : <br>
            Julien : <bold> 15</bold> / 20 <br>
            Celia : 15 / 20 <br>
            Priscilia : 15 / 20 <br>
          </p>
        </div>
      </section>
      <!-- SECTION 6 -->
</main>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../js/home.js"></script>
<?php
include_once "../template/footer.php";
?>