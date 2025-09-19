<header>
  <div class="container-fluid d-flex justify-content-center header" id="header">
    <div class="container d-flex justify-content-between">
      <img src="<?=get_stylesheet_directory_uri();?>'/resources/images/logo_negativ.png'" width="253" height="56">
      @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      @endif 
    </div>
  </div>
</header>
