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
          <li><span class="breadcrumb__link"></span>Shop</li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link"></span>Cart</li>
        </ul>
      </section>

      <!--=============== CART ===============-->
      <section class="cart section--lg container">
        <div class="table__container">
          <table class="table">
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th>Remove</th>
            </tr>

            <tr>
              <td>
                <img src="assets/img/images.jpeg" alt="" class="table__img">
              </td>
              
              <td>
                <h3 class="table__title">
                Fire Hose Reel
                </h3>
                <p class="table__description">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti, nihil?
                </p>
              </td>

              <td><span class="table__price">$110</span></td>

              <td><input type="number" value="1" class="quantity"></td>

              <td><span class="table__subtotal">$220</span></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td>
                <img src="assets/img/a.jpg" alt="" class="table__img">
              </td>
              
              <td>
                <h3 class="table__title">
                Fire Extinguisher
                </h3>
                <p class="table__description">
                  Ipsum dolor, sit amet consectetur adipisicing elit. Eaque, nam architecto!
                </p>
              </td>

              <td><span class="table__price">$110</span></td>

              <td><input type="number" value="3" class="quantity"></td>

              <td><span class="table__subtotal">$220</span></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>

            <tr>
              <td>
                <img src="assets/img/b.jpg" alt="" class="table__img">
              </td>
              
              <td>
                <h3 class="table__title">
                Fire Sprinkler System
                </h3>
                <p class="table__description">
                  Dolor sit amet consectetur adipisicing elit. Pariatur, blanditiis at.
                </p>
              </td>

              <td><span class="table__price">$110</span></td>

              <td><input type="number" value="1" class="quantity"></td>

              <td><span class="table__subtotal">$220</span></td>

              <td><i class="fi fi-rs-trash table__trash"></i></td>
            </tr>
          </table>
        </div>

        <div class="cart__actions">
          <a href="" class="btn flex btn--md">
            <i class="fi-rs-shuffle"></i> Update Cart 
          </a>

          <a href="shop.php" class="btn flex btn--md">
            <i class="fi-rs-shopping-bag"></i> Continue Shopping
          </a>
        </div>

        <div class="divider">
          <i class="fi fi-rs-fingerprint"></i>
        </div>

        <div class="cart__group grid">

          <div class="cart__total">
            <h3 class="section__title">Cart Totals</h3>

            <table class="cart__total-table">
              <tr>
                <!-- <td><span class="cart__total-title">Cart Subtotal</span></td> -->
                <!-- <td><span class="cart__total-price">$240</span></td> -->
              </tr>

              <tr>
                <!-- <td><span class="cart__total-title">Shipping</span></td> -->
                <!-- <td><span class="cart__total-price">$10</span></td> -->
              </tr>

              <tr>
                <td><span class="cart__total-title">Total</span></td>
                <td><span class="cart__total-price">$250</span></td>
              </tr>
            </table>

            <a href="checkout.php" class="btn flex btn--md">
              <i class="fi fi-rs-box-alt"></i> Proceed To Checkout
            </a>
          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <?php include 'components/newsletter2.php'; ?>
    </main>

    <!--=============== FOOTER ===============-->
    <?php include 'components/footer.php'; ?>


    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
