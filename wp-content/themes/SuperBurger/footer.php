<footer id="contact" style="background-image: url('<?= get_template_directory_uri();  ?>/img/footer.png');">

    <div class="top">
        <div class="left">
            <img src="<?= get_template_directory_uri() ?>/img/footicon.png" alt="">
            <p class="lorem_footer">Lorem ipsum dolor sit, amet consectetur adipisicing elit. In inventore quis architecto illum fugit. Officiis facere itaque quisquam provident esse nisi dolorem consequatur suscipit, incidunt corrupti harum, ducimus quos a?</p>
        </div>
        <div class="right">
            <div class="map">
                <img src="<?= get_template_directory_uri() ?>/img/map_logo.png" class="map_logo" alt="">
                <p class="text_map">MAIN ROAD.BULDING NAME.COUNTRY</p>
            </div>
            <div class="email">
                <img src="<?= get_template_directory_uri() ?>/img/Email_logo.png" class="email_logo" alt="">
                <p class="text_email">INFO@COMPANYNAME.COM</p>
            </div>
        </div>
    </div>
    <?php if (is_active_sidebar('footer')) {
        dynamic_sidebar('footer');
    } ?>
    <div class="bottom">
        <p class="copyright">© Company name 2022. All rights reserved.</p>
        <div class="social_media">
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</footer>
<?php wp_footer(); ?>
</body>

</html>