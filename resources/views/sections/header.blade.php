<header class="container-fluid d-flex justify-content-center header" id="header">
  <div class="container d-flex justify-content-between align-items-center">
    <img class="header-logo" src="<?=get_stylesheet_directory_uri();?>'/resources/images/logo_negativ.png'" width="253" height="56">
    @if (has_nav_menu('primary_navigation'))
      <div class="menu-container">
        <img class="menu-logo" src="<?=get_stylesheet_directory_uri();?>'/resources/images/logo_negativ.png'" width="253" height="56">
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      </div>
      <div class="burger">
        <div class="burger-line burger-line-1"></div>
        <div class="burger-line burger-line-2"></div>
        <div class="burger-line burger-line-3"></div>
      </div>
    @endif 
  </div>
</header>
