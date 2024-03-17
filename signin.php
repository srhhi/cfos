<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CFOS - Sign In</title>
    <link rel="icon" href="assets-login/css/favicon.ico">
    <link href="assets-login/css/style.css" rel="stylesheet">
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
        <!--====== Animate CSS ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
            
        <!--====== lineicons CSS ======-->
        <link rel="stylesheet" href="assets/css/lineicons.css">
            
        <!--====== Bootstrap CSS ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
        <!--====== Default CSS ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        
        <!--====== Style CSS ======-->
        <link rel="stylesheet" href="assets/css/style.css">
</head>
  <body
    x-data="{ page: 'signin', 'darkMode': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'b eh': darkMode === true}"
  >
    <!-- ===== Header Start ===== -->
    <?php include 'template/header-login.html';?>

    <!-- ===== Header End ===== -->

    <main>
      <!-- ===== SignIn Form Start ===== -->
      <section class="i pg fh rm ki xn vq gj qp gr hj rp hr">
        <!-- Bg Shapes -->
        <img src="assets-login/images/shape-06.svg" alt="Shape" class="h j k" />
        <img src="assets-login/images/shape-03.svg" alt="Shape" class="h l m" />
        <img src="assets-login/images/shape-17.svg" alt="Shape" class="h n o" />
        <img src="assets-login/images/shape-18.svg" alt="Shape" class="h p q" />

        <div
          class="animate_top bb af i va sg hh sm vk xm yi _n jp hi ao kp"
        >
          <!-- Bg Border -->
          <span class="rc h r s zd/2 od zg gh"></span>
          <span class="rc h r q zd/2 od xg mh"></span>

          <div class="rj">
            <h2 class="ek ck kk wm xb">Sign in to your Account</h2>
            <p></p>

            <h3 class="hk yj kk wm ob mc"></h3>

            <span class="i rc sj hk xj">
              <span class="rc h s z/2 nd oe rh tm"></span>
              <span class="rc h q z/2 nd oe rh tm"></span>

              sign in with your email
            </span>
          </div>

          <form class="sb" name="loginForm" id="loginForm" method="post">
            <div class="wb">
              <label class="rc kk wm vb" for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="example@mail.com"
                class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
              />
            </div>

            <div class="wb">
              <label class="rc kk wm vb" for="password">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="**************"
                class="vd hh rg zk _g ch hm dm fm pl/50 xi mi sm xm pm dn/40"
              />
            </div>

            <button class="vd rj ek rc rg gh lk ml il _l gi hi" id="loginButton" name="loginButton" type="submit">Sign In</button>

            <p class="sj hk xj rj ob"><a class="mk" href="signup.html"></a>
            </p>
          </form>
        </div>
      </section>
      <!-- ===== SignIn Form End ===== -->
    </main>
    <!-- ===== Footer Start ===== -->
    <?php include 'template/footer-user.html'; ?>

    <!-- ===== Footer End ===== -->

    <!-- ====== Back To Top Start ===== -->
    <button
  class="xc wf xf ie ld vg sr gh tr g sa ta _a"
  @click="window.scrollTo({top: 0, behavior: 'smooth'})"
  @scroll.window="scrollTop = (window.pageYOffset > 50) ? true : false"
  :class="{ 'uc' : scrollTop }"
>
  <svg class="uh se qd" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
    <path d="M233.4 105.4c12.5-12.5 32.8-12.5 45.3 0l192 192c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L256 173.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l192-192z" />
  </svg>
</button>

    <!-- ====== Back To Top End ===== -->
  <script defer src="assets-login/css/bundle.js"></script></body>
  <script src="assets/js/login.js"></script>
</html>