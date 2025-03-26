<!DOCTYPE html>
<html lang="en">
  
  <?php include 'components/head.php'; ?>

  <body>
    <!-- progressbar -->
    <div class="progressbar"></div>
    <!--=============== HEADER ===============-->
    <?php include 'components/header.php'; ?>


    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>       
          <li><span class="breadcrumb__link">Login / Register</span></li>
        </ul>
      </section>

      <!--=============== LOGIN-REGISTER ===============-->
      <section class="login-register section--lg">
        <div class="login-register__container container grid">
          <div class="login">
            <h3 class="section__title">Login</h3>

            <form action="" class="form grid">
              <input
               type="email"
               placeholder="Your Email"
               class="form__input"
              />

              <input
               type="password"
               placeholder="Your password"
               class="form__input"
              />

              <div class="form__btn">
                <button class="btn">Login</button>
               </div>

            </form>
          </div>

          <div class="register">
            <h3 class="section__title">Create an Account</h3>

            <form action="" class="form grid">
              <input
               type="text"
               placeholder="Username"
               class="form__input"
              />

              <input
               type="email"
               placeholder="Your Email"
               class="form__input"
              />

              <input
               type="password"
               placeholder="Your password"
               class="form__input"
              />

              <input
               type="password"
               placeholder="Confirm password"
               class="form__input"
              />

              <div class="form__btn">
                <button class="btn">Submit & Register</button>
              </div>

            </form>
          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <?php include 'components/newsletter2.php'; ?>
    </main>

    <!--=============== FOOTER ===============-->
    <?php include 'components/footer.php'; ?>


    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js">
    </script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
