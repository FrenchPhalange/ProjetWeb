</main>
<footer>
<div class="footer-1">
        <p class="title-form">Avez-vous quelque chose à dire ?</p>
        <div class="card-form">
          <div class="text-form">
            <p>
              Faites-nous part de vos questions, suggestions et préoccupation en
              remplissant le formulaire de contact ci-dessus
            </p>
            <div class="social-media">
              <i class="fab fa-facebook-f"></i>
              <i class="fab fab fa-twitter"></i>
              <i class="fab fab fa-instagram"></i>
              <i class="fab fab fab fa-google-plus-g"></i>
            </div>
          </div>
          <form action="index.html" method="post">
            <div class="field">
              <label for="name">Name</label>
              <input
                type="text"
                name="name"
                id="name"
                placeholder="Enter your name"
              />
            </div>

            <div class="fields">
              <div class="field">
                <label for="phone">Phone</label>
                <input
                  type="number"
                  name="phone"
                  id="phone"
                  placeholder="Enter your phone"
                />
              </div>

              <div class="field">
                <label for="email">Email</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="Enter a valid email adress"
                />
              </div>

            </div>
            <button type="button">Nous Contacter</button>
          </form>
        </div>
      </div>
      <a href="#top"><i class="fas fa-angle-double-up"></i></a>
      <div class="footer-2">
        <div class="footer-2-top"></div>
        <p class="text-footer">
          Sample text. Click to select the box. Click again or double click to
          start editing the text
        </p>
      </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>