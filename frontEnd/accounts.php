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
          <li><span class="breadcrumb__link">Account</span></li>
        </ul>
      </section>

      <!--=============== ACCOUNTS ===============-->
      <section class="accounts section--lg">
        <div class="accounts__container container grid">
          <div class="account__tabs">
            <p class="account__tab active-tab" data-target="#dashboard">
              <i class="fi fi-rs-setting-sliders"></i> Dashboard
            </p>

            <p class="account__tab" data-target="#orders">
              <i class="fi fi-rs-shopping-bag"></i> Orders
            </p>

            <p class="account__tab" data-target="#update-profile">
              <i class="fi fi-rs-user"></i> Update Profile
            </p>

            <p class="account__tab" data-target="#address">
              <i class="fi fi-rs-marker"></i> My Address
            </p>

            <p class="account__tab" data-target="#change-password">
              <i class="fi fi-rs-user"></i> Change Password
            </p>

            <p class="account__tab">
              <i class="fi fi-rs-exit"></i> Logout
            </p>
          </div>

          <div class="tabs__content">
            <div class="tab__content active-tab" content id="dashboard">
              <h3 class="tab__header">Hello Rosie!</h3>

              <div class="tab__body">
                <p class="tab__description">
                  Lorem ipsum, dolor sit amet laudantium ex ratione optio! Praesentium
                  consectetur adipisicing elit. Error fuga cupiditate, 
                  ipsam id repudiandae nulla nesciunt! Temporibus minus.
                </p>
              </div>
            </div>

            <div class="tab__content" content id="orders">
              <h3 class="tab__header">Your Orders</h3>

              <div class="tab__body">
                <table class="placed__order-table">
                  <tr>
                    <th>Orders</th>
                    <th>Date</th>
                    <th>status</th>
                    <th>Total</th>
                    <th>Actions</th>
                  </tr>

                  <tr>
                    <td>#1357</td>
                    <td>March 45, 2020</td>
                    <td>Processing</td>
                    <td>$125.00</td>
                    <td><a href="#" class="view__order">View</a></td>
                  </tr>

                  <tr>
                    <td>#2468</td>
                    <td>June 29, 2020</td>
                    <td>Completed</td>
                    <td>$364.00</td>
                    <td><a href="#" class="view__order">View</a></td>
                  </tr>

                  <tr>
                    <td>#2366</td>
                    <td>Augudt 02, 2020</td>
                    <td>Completed</td>
                    <td>$200.00</td>
                    <td><a href="#" class="view__order">View</a></td>
                  </tr>
                </table>
              </div>
            </div>

            <div class="tab__content" content id="update-profile">
              <h3 class="tab__header">Update Profile</h3>

              <div class="tab__body">
                <form action="" class="form grid">
                  <input 
                    type="text"
                    placeholder="Username"
                    class="form__input"
                  />

                  <div class="form__btn">
                    <button class="btn btn--md">Save</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="tab__content" content id="address">
              <h3 class="tab__content">Shipping Address</h3>

              <div class="tab__body">
                <address class="address">
                  3522 Interstate <br />
                  75 Business Spur, <br />
                  Sault Ste. <br />
                  Marie, MI 49783 
                </address>
                <p class="city">New York</p>
                <a href="" class="edit">Edit</a>
              </div>
            </div>

            <div class="tab__content" content id="change-password">
              <h3 class="tab__header">Change Password</h3>

              <div class="tab__body">
                <form action="" class="form grid">
                  <input type="password"
                   placeholder="Current password"
                    class="form__input"
                  />

                  <input type="password"
                   placeholder="New password"
                    class="form__input"
                  />

                  <input type="password"
                   placeholder="Confirm password"
                    class="form__input"
                  />


                  <div class="form__btn">
                    <button class="btn btn--md">Save</button>
                  </div>
                </form>
              </div>
            </div>
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
