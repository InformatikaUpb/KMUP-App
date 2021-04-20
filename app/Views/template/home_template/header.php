<header class="header-area">
  <!-- Top Header Area -->
  <div class="top-header-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <!-- Breaking News Widget -->
          <div class="breaking-news-area d-flex align-items-center">
            <div class="news-title">

              <p><span style="color: red; font-weight: 900 ;">Informatika</span></p>
            </div>
            <div id="breakingNewsTicker" class="ticker">
              <ul>
                <li><a href="#">Lorem ipsum dolor sit, amet consectetur adipisicing
                    elit. Fuga sed vel, cupiditate at minus odio.</a></li>
                <li><a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Nostrum, placeat?</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet consectetur
                    adipisicing.</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="top-meta-data d-flex align-items-center justify-content-end">
            <!-- Top Social Info -->
            <div class="top-social-info">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
            <!-- Top Search Area -->
            <div class="top-search-area">
              <form action="index.html" method="post">
                <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <!-- Login -->
            <a href="<?= base_url('auth/login/'); ?>" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
            <a class="btn-theme"><i class="fa fa-cog" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar Area -->
  <?= $this->include('template/home_template/navbar'); ?>
  <div id="corousel-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#corousel-slide" data-slide-to="0" class="active"></li>
      <li data-target="#corousel-slide" data-slide-to="1"></li>
      <li data-target="#corousel-slide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/bg-img/1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>title</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, incidunt.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/bg-img/2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>title</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, incidunt.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/bg-img/3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>title</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, incidunt.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#corousel-slide" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#corousel-slide" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>