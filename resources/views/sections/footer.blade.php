<footer>
  <div class="container-fluid footer">
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12">
            <div class="footer-logo">
              <img src="<?=get_stylesheet_directory_uri();?>'/resources/images/logo_negativ.png'" width="263">
            </div>
            <div class="footer-info">
              <div class="footer-line"></div>
              <div class="footer-name">Gozdarstvo in arboristika, <br> Matej Močnik s.p.</div>
              <div class="footer-address">Starožirovska cesta 3A, <br> 4226 Žiri</div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-12"></div>
          <div class="col-lg-2 col-sm-12">
            <div class="footer-col-md">
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
          <div class="col-lg-1 col-sm-12"></div>
          <div class="col-lg-3 col-sm-12 pt-lg-0 pt-sm-5">
            <div class="d-flex flex-column gap-4">
              <span class="footer-title">Kontaktirajte nas</span>
              <span>gozdarstvo.arboristika@gmail.com <br> 041 269 288</span>
            </div>
          </div>
        </div>
      <div class="row footer-credits">
        <div class="d-flex justify-content-lg-center justify-content-sm-start">
          <span>Gozdarstvo.si, vse pravice pridržane. | Izdelava spletne strani: Studio Mazzini / SiWeb</span>
        </div>
      </div>
    </div>
  </div>
</footer>
