<link rel="stylesheet" href="../css/home.css">
<?php
$_GLOBALS['login'] = false;
$title = "Piscine Page";
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
        <img src="../img/piscine.jpg" alt="" />
        <div class="left-section-2">
            <p class="title-section-2">Piscine</p>
            <p class="subtitle-section-2">
            Venez rejoindre nos cours de waterbike.
               Tous les Mardi et Vendredi (voir le planning pour plus de précision), Venez nombreux
               pour Stéphane et Mélanie. Venez pédaler et nager
               Avec nous, vous verrez c’est amusant !
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
                        <img src="../img/coach4.jpg" alt="" />
                        <p class="title-card-info">Stéphane Marin</p>
                        <p class="description-card-info">
                            - Diplomé par l’Etat <br>
                            - Spécialité : Natation & Water Polo
                        </p>
                    </div>
                </div>
                <div class="part-2-section-3" data-aos="fade-up-right">
                    <div class="card-info-page2">
                        <img src="../img/coach5.jpg" alt="" />
                        <p class="title-card-info">Mélanie Carred</p>
                        <p class="description-card-info">
                            -Diplomé par l’Etat <br>
                            -Specialité: Natation & Musculation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 3 -->
    <!-- SECTION 4 -->
    <section id="intro" class="section section-2">
        <img src="../img/piscine2.jpg" alt="" />
        <div class="left-section-2">
            <p class="title-section-2">Notre piscine</p>
            <p class="subtitle-section-2">
                Le bassin de natation a une longueur de 25 mètres et une largeur de 12,15 mètres.
                Elle est divisée en 6 couloirs.
                La profondeur varie entre 1 mètre et 1,8 mètre. Le sol est en pente douce sur toute la longueur du bassin.
                Deux plongeoirs sont disposés dans la grande profondeur.
                Un local de rangement est partagé par les clubs.
                Quatre vestiaires collectifs sont réservés à la piscine, dont deux sont accessible aux PMR (Personnes à Mobilité Réduite).
            </p>
            <button class="read-more">lire la suite</button>
        </div>
    </section>
    <!-- SECTION 4 -->
    <!-- SECTION 5 -->
    <section id="discover" class="section section-5">
        <p class="title-section-5">Le Planning</p>
        <table>
            <caption> *Tout les Lundis et Samedis de 9H à 19H, sauf jour férié
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
                <td class="coach4">Stéphane</td>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td></td>
                <td></td>
                <td></td>
                <td class="coach4">Stéphane</td>
            </tr>
            <tr>
                <th scope="row">10h-11h</th>
                <td class="coach4">Stéphane</td>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td class="coach4">Stéphane</td>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td class="coach4">Stéphane</td>
            </tr>
            <tr>
                <th scope="row">11h-12h</th>
                <td></td>
                <td></td>
                <td></td>
                <td class="coach4">Stéphane</td>
                <td></td>
                <td class="coach5">Mélanie</td>
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
                <td></td>
                <td></td>
                <td class="coach4">Stéphane</td>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">16h-17h</th>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td class="coach4">Stéphane</td>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td class="coach4">Stéphane</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">17h-18h</th>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td></td>
                <td></td>
                <td class="coach5">Mélanie</td>
                <td class="coach4">Stéphane</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">18h-19h</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="coach4">Stéphane</td>
                <td></td>
            </tr>
        </table>
    </section>
    <!-- SECTION 5 -->
    <!-- SECTION 6 -->
    <section id="intro" class="section section-page2">
        <div class="left-section-page2">
            <p class="title-section-page2">Inscription</p>
            <p class="subtitle-section-page2">
                Si vous souhaiter vous inscrire pour le prochain cours de fitness, c’est ici:
            </p>
            <button class="read-more-page2">Melanie Carred</button>

            <button class="read-more-page2">Stephane Marin</button>

            <p class="subtitle-section-page22">

                <?php RestPlace("piscine", "Melanie Carred", 15);

                RestPlace("piscine", "Stephane Marin", 15); ?>

            </p>
        </div>
    </section>
    <!-- SECTION 6 -->
</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="../js/piscine.js"></script>
<?php
include_once "../template/footer.php";
?>