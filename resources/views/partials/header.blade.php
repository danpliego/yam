<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand d-block d-lg-none" href="#"><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/yam-logo.png" height="35" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav justify-content-center w-100 align-items-center">
      <li class="nav-item active dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          TULUM.
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo esc_url( home_url( '/' ) ); ?>">2019</a>
          <a class="dropdown-item" href="<?php echo esc_url( home_url( '/tulum18' ) ); ?>">2018</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( home_url( '/acapulco' ) ); ?>">ACAPULCO.</a>
      </li>
      <li class="nav-item mx-3 d-none d-lg-block">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/yam-logo.png" height="35px" />
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( home_url( '/mykonos' ) ); ?>">MYKONOS.</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo esc_url( home_url( '/about' ) ); ?>">ABOUT.</a>
      </li>
    </ul>
    <ul class="navbar-nav navbar-social-media d-none d-lg-flex">
      <li class="nav-item">
        <a href="https://www.facebook.com/YAMCELEBRATION/" class="nav-link px-3" target="_blank">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="https://www.instagram.com/yamcelebration/" class="nav-link px-3" target="_blank">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>
</nav>