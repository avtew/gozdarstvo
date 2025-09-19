<footer>
  <div class="container-fluid footer">
    <div class="row p-xxl-0 p-sm-5 g-0">
      <div class="col-xxl-4 col-sm-12 p-0 d-flex flex-column justify-content-end align-items-xxl-end align-items-sm-start">
        <div class="footer-logo">
          <img src="<?=get_stylesheet_directory_uri();?>'/resources/images/logo_negativ.png'" width="263">
        </div>
        <div class="footer-info">
          <div class="footer-line"></div>
          <div class="footer-name">Gozdarstvo in arboristika, <br> Matej Močnik s.p.</div>
          <div class="footer-address">Starožirovska cesta 3A, <br> 4226 Žiri</div>
        </div>
      </div>
      <div class="col-xxl-2 col-sm-12 p-0"></div>
      <div class="col-xxl-2 col-sm-12 p-xxl-0 pt-sm-5">
        <div class="footer-col-md align-items-xxl-start">
          <span class="footer-title">Navigacija</span>
          <div>
            @if (has_nav_menu('primary_navigation'))
              <nav aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
                {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
              </nav>
            @endif
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-sm-12 p-xxl-0 pt-sm-5 d-flex flex-column align-items-xxl-start">
        <div class="d-flex flex-column gap-4">
          <span class="footer-title">Kontaktirajte nas</span>
          <span>gozdarstvo.arboristika@gmail.com <br> 041 269 288</span>
        </div>
      </div>
    </div>
    <div class="row g-0 d-flex">
      <div class="p-xxl-0 ps-sm-5 d-flex justify-content-xxl-center justify-content-sm-start">
        <span>Gozdarstvo.si, vse pravice pridržane. | Izdelava spletne strani: Studio Mazzini / SiWeb</span>
      </div>
    </div>
  </div>
</footer>
