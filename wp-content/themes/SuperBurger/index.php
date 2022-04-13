<?php get_header(); ?>
<main class="row">
        <div class="scroll-up">
            <a href="#top"><i class="fa-solid fa-circle-arrow-up fa-2xl"></i></a>              
        </div>
    <?php get_sidebar();  ?>

    <section class="menu-burger" id="menu" data-aos="zoom-in">
        <div class="all_cards-burgers">
            <div class="card-burger card-burger-1">
                <img src="<?= get_template_directory_uri() ?>/img/popular.png" alt="">
                <h3>TRY IT TODAY</h3>
                <h2>MOST POPUAR BURGER</h2>
            </div>
            <div class="double-card-burgers">
                <div class="card-burger card-burger-2">
                    <img src="<?= get_template_directory_uri() ?>/img/taste-burger.png" alt="">
                    <h3>TRY IT TODAY</h3>
                    <h2>MORE FUN MORE TASTE</h2>
                </div>
                <div class="card-burger card-burger-3 ">
                    <img src="<?= get_template_directory_uri() ?>/img/chili-burger.png" alt="">
                    <h3>TRY IT TODAY</h3>
                    <h2>FRESH & CHILI</h2>
                </div>
            </div>
        </div>
        <button class="alwaystastyburger">ALWAYS TASTY BURGER</button>
    </section>

    <section class="choose-enjoy">
        <h2>CHOOSE & ENJOY</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum eaque necessitatibus sit, dicta hic quia nemo qui molestiae, ab earum molestias velit pariatur numquam laudantium aliquam tempora officia!</p>

        <div class="all_cards_burger-choose">

            <div class="card_choose card-choose-1">
                <img src="<?= get_template_directory_uri()?>/img/Burger-1.png" alt="">
                <p class="title_burger">LOREM IPSUM DOLOR</p>
                <p class="description-burger">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos magni</p>
                <button class="btn-order-now">ORDER NOW</button>
            </div>

            <div class="card_choose card-choose-2">
                <img src="<?= get_template_directory_uri()?>/img/Burger-2.png" alt="">
                <p class="title_burger">LOREM IPSUM DOLOR</p>
                <p class="description-burger">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos magni</p>
                <button class="btn-order-now">ORDER NOW</button>
            </div>

            <div class="card_choose card-choose-3">
                <img src="<?= get_template_directory_uri()?>/img/Burger-1.png" alt="">
                <p class="title_burger">LOREM IPSUM DOLOR</p>
                <p class="description-burger">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos magni</p>
                <button class="btn-order-now">ORDER NOW</button>
            </div>

        </div>

    </section>

    <section class="story" data-aos="zoom-in" id="story">
        <div class="slider">
            <div class="left-slider">
                <p class="subtitle-slider">Discover</p>
                <p class="title-slider">UPCOMING EVENTS</p>
                <p class="lorem-slider">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut adipisci numquam cum atque aliquid? Tempora quasi quis animi accusantium numquam. Nobis cumque hic modi delectus facilis esse ducimus culpa obcaecati.</p>

                <div class="points-slider">

                    <div class="round-slider round-active point-1"></div>

                    <div class="round-slider point-2"></div>

                    <div class="round-slider point-3"></div>

                </div>
            </div>
            <div class="right-slider">
                <img id="sliderimg" src="<?= get_template_directory_uri() ?>/img/Burger-fond.png" alt="">
            </div>
        </div>
    </section>

    <section class="reservation">
        <h4 class="subtitle-reservation">RESERVATION</h4>
        <h2 class="title-reservation">BOOK YOUR TABLE</h2>
        <img class="img-burger-reservation" src="<?= get_template_directory_uri() . '/img/Burger-3.png'; ?>" alt="">
        <img src="<?= get_template_directory_uri() . '/img/Bottle.png'; ?>" alt="" class="img-bottle-reservation">
        <form action="" method="post">
            <div class="field-1">
                <input type="text" name="name" id="name" placeholder="Name">
                <input type="text" name="email" id="email" placeholder="Email">
            </div>
            <div class="field-2">
                <input type="text" name="date" id="date" placeholder="Date" class="date">   
                <input type="text" name="time" id="time" placeholder="Time" class="time">
            </div>
            <div class="field-3">
                <input type="text" name="people" id="people" placeholder="People">
                <button type="submit">FIND A TABLE</button>
            </div>
        </form>
        <img src="<?= get_template_directory_uri() . '/img/plat.png'; ?>" alt="" class="img-plate-reservation">
        <div class="scroll-up scroll-up-2">
            <a href="#top"><i class="fa-solid fa-circle-arrow-up fa-2xl"></i></a>              
        </div>

    </section>
    
</main>
<?php get_footer(); ?>