<!DOCTYPE html>
<html lang="en">
  
<?php include 'components/head.php'; ?>

  <body>
    <!--=============== HEADER ===============-->
    <?php include 'components/header.php'; ?>


    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.php" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>       
          <li><span class="breadcrumb__link">Shop</span></li>
          <li><span class="breadcrumb__link">></span></li>       
          <li><span class="breadcrumb__link">Chekout</span></li>
        </ul>
      </section>
      <!--=============== CHECKOUT ===============-->
      <section class="checkout section--lg"> 
        <div class="checkout__container container grid">
          <div class="checkout__group">
            <h3 class="section__title">Billing Details</h3>

            <form action="" class="form grid">
              <input type="text" placeholder="Name" class="form__input">

              <input type="text" placeholder="Address" class="form__input">

              <input type="text" placeholder="City" class="form__input">

              <input type="text" placeholder="Country" class="form__input">

              <input type="text" placeholder="Postcode" class="form__input">

              <input type="text" placeholder="Phone" class="form__input">

              <input type="email" placeholder="Email" class="form__input">

              <h3 class="checkout__title">Additional Informaton</h3>

              <textarea name="" placeholder="Order note" id="" cols="30" 
              rows="10" class="form__input textarea"></textarea>
            </form>
          </div>

          <div class="checkout__group">
            <h3 class="section__title">Cart Totals</h3>

            <table class="order__table">
              <tr>
                <th colspan="2">Products</th>
                <th>Total</th>
              </tr>

              <tr>
                <td>
                  <img
                   src="assets/img/product-1-2.jpg"
                   alt=""
                   class="order__img"
                  />
                </td>

                <td>
                  <h3 class="table__title">Yidarton Women Summer Blue</h3>
                  <p class="table__quantity">x 2</p>
                </td>

                <td><span class="table__price">$180.00</span></td>
              </tr>

              <tr>
                <td>
                  <img
                   src="assets/img/product-2-1.jpg"
                   alt=""
                   class="order__img"
                  />
                </td>

                <td>
                  <h3 class="table__title">LDB MOON Women Summe</h3>
                  <p class="table__quantity">x 1</p>
                </td>

                <td><span class="table__price">$65.00</span></td>
              </tr>

              <tr>
                <td>
                  <img
                   src="assets/img/product-7-1.jpg"
                   alt=""
                   class="order__img"
                  />
                </td>

                <td>
                  <h3 class="table__title">Women's Short Sleeve Loose</h3>
                  <p class="table__quantity">x 2</p>
                </td>

                <td><span class="table__price">$35.00</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">SubTotal</span></td>
                <td colspan="2"><span class="table__price">$280.00</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Shipping</span></td>
                <td colspan="2"><span class="table__price">Free Shipping</span></td>
              </tr>

              <tr>
                <td><span class="order__subtitle">Total</span></td>
                <td colspan="2"><span class="order__grand-total">$280.00</span></td>
              </tr>
            </table>

            <div class="payment__methods">
              <h3 class="checkout__title payment__title">Payment</h3>

              <div class="payment__option flex">
                <input type="radio" name="radio" checked class="payment__input">
                <label for="" class="payment__label">Direct Bank Transfer</label>
              </div>

              <div class="payment__option flex">
                <input type="radio" name="radio" class="payment__input">
                <label for="" class="payment__label">Chek Payment</label>
              </div>

              <div class="payment__option flex">
                <input type="radio" name="radio" class="payment__input">
                <label for="" class="payment__label">Paypal</label>
              </div>
            </div>

            <button class="btn btn--md">Place Order</button>
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
